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
            $dataProfile = [
                'user_code' => $data['email'],
                'user_name' => $data['user_name'],
                'birthday' => $data['birthday'],
                'gender' => $data['gender'],
                'phone_number' => $data['phone_number'],
                'user_email' => $data['user_email'],
                'address' => $data['address'],
                'subject' => $data['subject'],
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
}
