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

    public function getAllStudentByTeacher($idTeacher, $status = null)
    {
        return $this->model->with('student.profile')
            ->with('topic')
            ->with('project')
            ->where('teacher_id', $idTeacher)
            ->when(isset($status), function ($query) use ($status) {
                return $query->whereIn('status', $status);
            })
            ->get()->toArray();
    }

    public function registerTeacherByStudent($data)
    {
        DB::beginTransaction();
        try {
            $dataRegister = [
                'teacher_id' => $data['teacher_id'],
                'student_id' => $data['student_id'],
                'status' => STATUS_STEP_WAITING,
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

    public function acceptStudentByTeacher($id)
    {
        DB::beginTransaction();
        try {
            $this->update($id, [
                'status' => STATUS_STEP_LEANING
            ]);
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }

    public function acceptTopicStudentByTeacher($id)
    {
        DB::beginTransaction();
        try {
            $this->update($id, [
                'status_topic' => STATUS_TOPIC_WAITING_DEAN
            ]);
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }

    public function removeTopicStudentByTeacher($id)
    {
        DB::beginTransaction();
        try {
            $this->update($id, [
                'topic_id' => null,
                'status_topic' => null
            ]);
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }

    public function registerTopicStore($data, $teacherStudent)
    {
        DB::beginTransaction();
        try {
            $teacherStudent->topic_id = $data['id_topic'];
            $teacherStudent->status_topic = STATUS_TOPIC_WAITING;
            $teacherStudent->save();
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }

    public function getTopicStudentToAccept($idTeacher)
    {
        return $this->model->with('student.profile')
            ->with('topic')
            ->where('teacher_id', $idTeacher)
            ->where('status_topic',STATUS_TOPIC_WAITING)
            ->where('topic_id', '<>', null)
            ->get()->toArray();
    }

    public function rateProject($teacherStudentId, $data)
    {
        DB::beginTransaction();
        try {
            $teacherStudent = $this->findOrFail($teacherStudentId);
            $teacherStudent->rate_note = $data['rate_note'];
            $teacherStudent->rate_date = date('d/m/Y', time());
            $teacherStudent->status_topic = STATUS_TOPIC_DONE;
            $teacherStudent->status = STATUS_STEP_DONE;
            $teacherStudent->save();
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }

    public function getTopicStudent($subject)
    {
       try {
           $dataTeacher = resolve(UserEloquentRepository::class)->getTeacherBySubject($subject);
           return $this->model->where('teacher_id', $dataTeacher)->get();
       } catch (\Exception $exception) {
           return [];
       }
    }

    public function deanAcceptTopicStudent($id)
    {
        DB::beginTransaction();
        try {
            $teacherStudent = $this->findOrFail($id);
            $teacherStudent->status_topic = STATUS_TOPIC_DOING;
            $teacherStudent->save();
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }

    public function removeAcceptTopicStudent($id)
    {
        DB::beginTransaction();
        try {
            $teacherStudent = $this->findOrFail($id);
            $teacherStudent->status_topic = null;
            $teacherStudent->topic_id = null;
            $teacherStudent->save();
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }

    public function getListStudentTeacher($params) {
        return $this->model->join('users', 'users.id', 'student_id')
            ->with('student.profile')
            ->with('teacher.profile')
            ->with('topic')
            ->with('project')
            ->when($params, function ($q) use ($params) {
                return $q->where('users.email', 'like', '%'.$params['ma_sv'].'%');
            })
            ->get()->toArray();
    }
}
