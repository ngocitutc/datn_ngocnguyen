<?php

namespace App\Http\Controllers\Student;

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

class StudentController extends Controller
{
    private $topicEloquentRepository;
    private $profileEloquentRepository;
    private $teacherStudentEloquentRepository;
    private $userEloquentRepository;

    public function __construct(
        UserEloquentRepository $userEloquentRepository,
        TopicEloquentRepository $topicEloquentRepository,
        ProfileEloquentRepository $profileEloquentRepository,
        TeacherStudentEloquentRepository $teacherStudentEloquentRepository
    )
    {
        $this->userEloquentRepository = $userEloquentRepository;
        $this->topicEloquentRepository = $topicEloquentRepository;
        $this->profileEloquentRepository = $profileEloquentRepository;
        $this->teacherStudentEloquentRepository = $teacherStudentEloquentRepository;
    }

    public function getTopics()
    {
        $data = $this->topicEloquentRepository->getAllTopicToStudent(Auth::user()->id);
        return view('student.topic_index', compact('data'));
    }

    public function getTeachers()
    {
        $data = $this->userEloquentRepository->getDataTeacher();
        return view('student.teacher_index', compact('data'));
    }

    public function registerTopic()
    {
        $data = $this->topicEloquentRepository->getAllTopicToStudent(Auth::user()->id);
        return view('student.register_topic', compact('data'));
    }

    public function createProject()
    {
        $data = $this->topicEloquentRepository->getAllTopicToStudent(Auth::user()->id);
        return view('student.project_add', compact('data'));
    }

    public function infoProject()
    {
        $data = $this->topicEloquentRepository->getAllTopicToStudent(Auth::user()->id);
        return view('student.project_info', compact('data'));
    }

    public function infoTeacher()
    {
        $data = $this->topicEloquentRepository->getAllTopicToStudent(Auth::user()->id);
        return view('student.teacher_info', compact('data'));
    }
}
