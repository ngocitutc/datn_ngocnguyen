<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\TopicRequest;
use App\Http\Requests\UserRequest;
use App\Repositories\ProfileEloquentRepository;
use App\Repositories\ProjectEloquentRepository;
use App\Repositories\TeacherStudentEloquentRepository;
use App\Repositories\TopicEloquentRepository;
use App\Repositories\UserEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function GuzzleHttp\Promise\all;

class StudentController extends Controller
{
    private $topicEloquentRepository;
    private $profileEloquentRepository;
    private $teacherStudentEloquentRepository;
    private $userEloquentRepository;
    private $projectEloquentRepository;

    public function __construct(
        UserEloquentRepository $userEloquentRepository,
        TopicEloquentRepository $topicEloquentRepository,
        ProfileEloquentRepository $profileEloquentRepository,
        TeacherStudentEloquentRepository $teacherStudentEloquentRepository,
        ProjectEloquentRepository $projectEloquentRepository
    )
    {
        $this->userEloquentRepository = $userEloquentRepository;
        $this->topicEloquentRepository = $topicEloquentRepository;
        $this->profileEloquentRepository = $profileEloquentRepository;
        $this->teacherStudentEloquentRepository = $teacherStudentEloquentRepository;
        $this->projectEloquentRepository = $projectEloquentRepository;
    }

    public function getTopics()
    {
        $student = Auth::user();
        $teacherStudent = $student->getTeacherLastByStudent();
        $data = $this->topicEloquentRepository->getAllTopicToStudent();
        return view('student.topic_index', compact('data', 'teacherStudent'));
    }

    public function showInfoTopic($id)
    {
        $data = $this->topicEloquentRepository->getTopicById($id);
        abort_if(!$data, 404);
        $data = $data->toArray();
        return view('student.topic_info', compact('data'));

    }

    public function getTeachers()
    {
        $student = Auth::user();
        $teacherStudent = $student->getTeacherLastByStudent();

        if ($teacherStudent) {
            return view('student.teacher_index', compact('teacherStudent'));
        } else {
            $data = $this->userEloquentRepository->getDataTeacher();
            return view('student.teacher_index', compact('data'));
        }
    }

    public function registerTopic()
    {
        $student = Auth::user();
        $teacherStudent = $student->getTeacherLastByStudent();
        if ($teacherStudent) {
            $data = $this->topicEloquentRepository->getAllTopicTeacherToStudent();
            return view('student.register_topic', compact('data', 'teacherStudent'));
        }
        return view('student.register_topic');
    }

    public function storeRegisterTopic(Request $request)
    {
        $student = Auth::user();
        $teacherStudent = $student->getTeacherLastByStudent();
        if ($teacherStudent && $this->teacherStudentEloquentRepository->registerTopicStore($request->all(), $teacherStudent)) {
            Session::flash(STR_FLASH_SUCCESS, 'Đăng ký đề tài thành công, Liên hệ với giảng viên hướng dẫn để xác nhận');
        } else {
            Session::flash(STR_FLASH_ERROR, 'Xảy ra lỗi trong quá trình xử lý hệ thống. Hãy thử lại');
        }
        return redirect()->back();
    }

    public function createProject()
    {
        $student = Auth::user();
        $teacherStudent = $student->getTeacherLastByStudent();
        if ($teacherStudent) {
            $data = $this->topicEloquentRepository->getAllTopicToStudent(Auth::user()->id);
            return view('student.project_add', compact('data', 'teacherStudent'));
        }
        return view('student.project_add', compact('data'));
    }

    public function infoProject()
    {
        $student = Auth::user();
        $teacherStudent = $student->getTeacherLastByStudent();
        if ($teacherStudent) {
            $data = $this->topicEloquentRepository->getAllTopicToStudent(Auth::user()->id);
            return view('student.project_info', compact('data', 'teacherStudent'));
        }
        return view('student.project_info', compact('data'));

    }

    public function infoTeacher($id)
    {
        $data = $this->userEloquentRepository->getUser($id);
        if (!$data) {
            abort(404);
        }
        $data = $data->toArray();
        return view('student.teacher_info', compact('data'));
    }

    public function registerTeacher(Request $request)
    {
        if($this->teacherStudentEloquentRepository->registerTeacherByStudent($request->all())) {
            Session::flash(STR_FLASH_SUCCESS, 'Đăng ký giảng viên thành công');
            return redirect()->route(STUDENT_REGISTER_TOPIC);
        }
        Session::flash(STR_FLASH_ERROR, 'Đăng ký giảng viên không thành công, Xin hãy thử lại');
        return redirect()->back();
    }

    public function storeProject(ProjectRequest $request)
    {
        if ($this->projectEloquentRepository->createRecord($request->all())) {
            Session::flash(STR_FLASH_SUCCESS, 'Báo cáo đồ án thành công');
            return response()->json(['save' => true]);
        }
        Session::flash(STR_FLASH_ERROR, 'Xảy ra lỗi trong quá trình xử lý hệ thống. Hãy thử lại');
        return response()->json(['save' => false]);
    }
}
