<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserEloquentRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return User::class;
    }

    public function storeUser(array $data)
    {
        DB::beginTransaction();
        try {
            $dataUser = [
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'password_show' => $data['password'],
                'role' => $data['role']
            ];
            if ($data['role'] == STUDENT) {
                unset($data['subject']);
                unset($data['level']);
            } else {
                unset($data['class']);
                unset($data['period']);
            }
            $dataProfile = [
                'user_code' => $data['email'],
                'user_name' => $data['user_name'],
                'birthday' => $data['birthday'] ?? null,
                'gender' => $data['gender'],
                'phone_number' => $data['phone_number'] ?? null,
                'user_email' => $data['user_email'] ?? null,
                'address' => $data['address'] ?? null,
                'subject' => $data['subject'] ?? null,
                'level' => $data['level'] ?? null,
                'class' => $data['class'] ?? null,
                'period' => $data['period'] ?? null,
            ];
            $this->create($dataUser);
            resolve(ProfileEloquentRepository::class)->create($dataProfile);
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            report($exception);
            dd($exception->getMessage());
            DB::rollBack();
            return false;
        }
    }

    public function getDataUser()
    {
        return $this->model->with('profile')->where('role', '<>', ADMIN)->get()->toArray();
    }

    public function getDataTeacher() {
        return $this->model->with('profile')->withCount("teacherStudent")->where('role', TEACHER)->get();
    }

    public function getUser($id) {
        return $this->model->with('profile')->find($id);
    }


    public function getDataTeacherByRole($params)
    {
        return $this->model->with('profile')
                    ->join('profiles', 'profiles.user_code', 'users.email')
                    ->when($params, function ($q) use ($params) {
                        return $q->where('profiles.subject', (int)$params['subject'] === 4 ? '<>' : '=', (int)$params['subject']);
                    })
                    ->whereIn('role', [DEAN, TEACHER])
                    ->get();
    }

    public function getDataUserByRole($params)
    {
        return $this->model->with('profile')
            ->join('profiles', 'profiles.user_code', 'users.email')
            ->when($params, function ($q) use ($params) {
                return $q->where('profiles.class', $params['class'] === 'all' ? '<>' : '=', $params['class'])
                            ->where('profiles.period', $params['period'] === 'all' ? '<>' : '=', $params['period']);
            })
            ->where('role', STUDENT)
            ->get();
    }

    public function getTeacherBySubject($subject)
    {
        return $this->model->join('profiles', 'email', '=', 'user_code')->where('role', TEACHER)->where('profiles.subject', $subject)->select('users.id')->pluck('users.id')->toArray();
    }
}
