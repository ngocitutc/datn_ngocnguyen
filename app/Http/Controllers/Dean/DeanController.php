<?php

namespace App\Http\Controllers\Dean;

use App\Http\Controllers\Controller;
use App\Http\Requests\TopicRequest;
use App\Http\Requests\UserRequest;
use App\Repositories\ProfileEloquentRepository;
use App\Repositories\TeacherStudentEloquentRepository;
use App\Repositories\TopicEloquentRepository;
use App\Repositories\UserEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DeanController extends Controller
{
    private $topicEloquentRepository;
    private $profileEloquentRepository;
    private $teacherStudentEloquentRepository;

    public function __construct(
        TopicEloquentRepository $topicEloquentRepository,
        ProfileEloquentRepository $profileEloquentRepository,
        TeacherStudentEloquentRepository $teacherStudentEloquentRepository
    )
    {
        $this->topicEloquentRepository = $topicEloquentRepository;
        $this->profileEloquentRepository = $profileEloquentRepository;
        $this->teacherStudentEloquentRepository = $teacherStudentEloquentRepository;
    }

    public function getTopics()
    {
        $data = $this->topicEloquentRepository->getAllTopicByDean(Auth::user()->profile->subject);
        return view('dean.topic_index', compact('data'));
    }

    public function activeTopic(Request $request)
    {
        $user = Auth::user();
        if ($user->role != DEAN) {
            abort(404);
        }
        if ($this->topicEloquentRepository->activeTopic($request->all())) {
            Session::flash(STR_FLASH_SUCCESS, 'Duyệt thành công');
        } else {
            Session::flash(STR_FLASH_ERROR, 'Có lỗi trong quá trình xử lý');
        }
        return redirect()->route(DEAN_TOPIC);
    }

    public function teacherStudent()
    {
        $user = Auth::user();
        if ($user->role != DEAN) {
            abort(404);
        }
        $teacherStudent = $this->teacherStudentEloquentRepository->getTopicStudent($user->profile->subject);
        return view('dean.teacher_student', compact('teacherStudent'));
    }

    public function semester()
    {
        return view('dean.semester');
    }

    public function confirmTopicStudent(Request $request)
    {
        $user = Auth::user();
        if ($user->role != DEAN) {
            abort(404);
        }
        if($this->teacherStudentEloquentRepository->deanAcceptTopicStudent($request->id)) {
            Session::flash(STR_FLASH_SUCCESS, 'Duyệt thành công');
        } else {
            Session::flash(STR_FLASH_ERROR, 'Có lỗi trong quá trình xử lý');
        }
        return redirect()->back();
    }

    public function removeTopicStudent(Request $request)
    {
        $user = Auth::user();
        if ($user->role != DEAN) {
            abort(404);
        }
        if($this->teacherStudentEloquentRepository->removeAcceptTopicStudent($request->id)) {
            Session::flash(STR_FLASH_SUCCESS, 'Huỷ duyệt thành công');
        } else {
            Session::flash(STR_FLASH_ERROR, 'Có lỗi trong quá trình xử lý');
        }
        return redirect()->back();
    }

}
