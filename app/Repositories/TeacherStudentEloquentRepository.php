<?php

namespace App\Repositories;

use App\Models\TeacherStudent;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherStudentEloquentRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return TeacherStudent::class;
    }

    public function getAllStudentByTeacher($idTeacher)
    {
        return $this->model->with('student.profile')->where('teacher_id', $idTeacher)->get()->toArray();
    }

    public function registerTeacherByStudent($data)
    {
        DB::beginTransaction();
        try {
            $dataRegister = [
                'teacher_id' => $data['teacher_id'],
                'student_id' => $data['student_id'],
                'status' => STATUS_STEP_LEANNING,
            ];
            $this->create($dataRegister);
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::commit();
            return false;
        }

    }
}
