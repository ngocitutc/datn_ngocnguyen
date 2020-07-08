<?php

namespace App\Repositories;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TopicEloquentRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return Topic::class;
    }

    public function getAllTopicByTeacher($idTeacher)
    {
        return $this->model->with('userCreated.profile')
            ->where('user_created', $idTeacher)
            ->get()->toArray();
    }

    public function getAllTopicByDean($idSubject)
    {
        return $this->model->with('userCreated.profile')
            ->where('subject', $idSubject)
            ->where('status', CLOSE)
            ->get()->toArray();
    }

    public function getAllTopicTeacherToStudent()
    {
        $teacherStudent = Auth::user()->getTeacherLastByStudent();
        abort_if(!$teacherStudent, 404);
        return $this->model->with('userCreated.profile')
            ->where('user_created', $teacherStudent->teacher_id)
            ->get()->toArray();
    }

    public function getAllTopicToStudent()
    {
        return $this->model->with('userCreated.profile')
            ->where('status', OPEN)
            ->get()->toArray();
    }

    public function getTopicById($id)
    {
        return $this->model->with('userCreated.profile')
            ->find($id);
    }

    public function getAllTopicByStudent($idTeacher)
    {
        return $this->model->with('userCreated.profile')
            ->where('user_created', $idTeacher)
            ->get()->toArray();
    }

    public function createRecord($data)
    {
        DB::beginTransaction();
        try {
            $user = Auth::user();
            $data['status'] = CLOSE;
            $data['user_created'] = $user->id;
            $data['role_created'] = $user->role;
            $this->create($data);
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }

    public function activeTopic($data)
    {
        DB::beginTransaction();
        try {
            $this->update($data['id'], [
                'status' => OPEN,
                'date_active' => date('d/m/Y', time()),
                'note' => $data['note'],
            ]);
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }

    }
}
