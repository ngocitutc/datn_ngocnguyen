<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\RateProjecrRequest;
use App\Http\Requests\TopicRequest;
use App\Http\Requests\UserRequest;
use App\Repositories\ProcessProjectEloquentRepository;
use App\Repositories\ProfileEloquentRepository;
use App\Repositories\ProjectEloquentRepository;
use App\Repositories\TeacherStudentEloquentRepository;
use App\Repositories\TopicEloquentRepository;
use App\Repositories\UserEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    private $topicEloquentRepository;
    private $profileEloquentRepository;
    private $teacherStudentEloquentRepository;
    private $userEloquentRepository;
    private $projectEloquentRepository;
    private $processProjectEloquentRepository;

    public function __construct(
        UserEloquentRepository $userEloquentRepository,
        TopicEloquentRepository $topicEloquentRepository,
        ProfileEloquentRepository $profileEloquentRepository,
        TeacherStudentEloquentRepository $teacherStudentEloquentRepository,
        ProjectEloquentRepository $projectEloquentRepository,
        ProcessProjectEloquentRepository $processProjectEloquentRepository
    )
    {
        $this->userEloquentRepository = $userEloquentRepository;
        $this->topicEloquentRepository = $topicEloquentRepository;
        $this->profileEloquentRepository = $profileEloquentRepository;
        $this->teacherStudentEloquentRepository = $teacherStudentEloquentRepository;
        $this->projectEloquentRepository = $projectEloquentRepository;
        $this->processProjectEloquentRepository = $processProjectEloquentRepository;
    }

    public function getTopics()
    {
        $data = $this->topicEloquentRepository->getAllTopicByTeacher(Auth::user()->id);
        return view('teacher.topic_index', compact('data'));
    }

    public function getStudent()
    {
        $data = $this->teacherStudentEloquentRepository->getAllStudentByTeacher(Auth::user()->id);
        return view('teacher.student_index', compact('data'));
    }

    public function offer()
    {
        $data = $this->teacherStudentEloquentRepository->getTopicStudentToAccept(Auth::user()->id);
        return view('teacher.topic_offer', compact('data'));
    }

    public function getStudentOffer()
    {
        $data = $this->teacherStudentEloquentRepository->getAllStudentByTeacher(Auth::user()->id, [STATUS_STEP_WAITING]);
        return view('teacher.student_offer', compact('data'));
    }

    public function acceptStudentOffer(Request $request)
    {
        if($this->teacherStudentEloquentRepository->acceptStudentByTeacher($request->id)) {
            Session::flash(STR_FLASH_SUCCESS, 'Đã nhận sinh viên thành công');
        } else {
            Session::flash(STR_FLASH_ERROR, 'Xảy ra lỗi trong quá trình xử lý');
        }
        return redirect()->back();
    }

    public function create()
    {
        return view('teacher.topic_create');
    }

    public function store(TopicRequest $request)
    {
        if ($this->topicEloquentRepository->createRecord($request->all())) {
            Session::flash(STR_FLASH_SUCCESS, 'Gửi đề tài tới lãnh đạo khoa thành công');
            return response()->json(['save' => true]);
        }
        Session::flash(STR_FLASH_ERROR, 'Gửi đề tài tới lãnh đạo khoa thất bại');
        return response()->json(['save' => false]);
    }

    public function acceptTopicStudent(Request $request)
    {
        if ($this->teacherStudentEloquentRepository->acceptTopicStudentByTeacher($request->id)) {
            Session::flash(STR_FLASH_SUCCESS, 'Duyệt đề tài thành công');
        } else {
            Session::flash(STR_FLASH_ERROR, 'Xảy ra lỗi trong quá trình xử lý');
        }
        return redirect()->back();
    }

    public function removeTopicStudent(Request $request)
    {
        if ($this->teacherStudentEloquentRepository->removeTopicStudentByTeacher($request->id)) {
            Session::flash(STR_FLASH_SUCCESS, 'Huỷ đề tài thành công');
        } else {
            Session::flash(STR_FLASH_ERROR, 'Xảy ra lỗi trong quá trình xử lý');
        }
        return redirect()->back();
    }

    public function rateProject($id)
    {
        $teacherStudent = $this->teacherStudentEloquentRepository->find($id);
        abort_if(!$teacherStudent, 404);
        $project = $teacherStudent->project;
        abort_if(!$project, 404);
        return view('teacher.rate_project', compact('teacherStudent', 'project'));
    }

    public function storeRateProject(RateProjecrRequest $request)
    {
        $data = $request->all();
        if ($this->teacherStudentEloquentRepository->rateProject($data['id_teacher_student'], $data)) {
            Session::flash(STR_FLASH_SUCCESS, 'Đánh giá đồ án thành công');
            return response()->json(['save' => true]);
        }
        Session::flash(STR_FLASH_ERROR, 'Xảy ra lỗi trong quá trình xử lý');
        return response()->json(['save' => false]);
    }

    public function processProjectStudent($id)
    {
        $teacherStudent = $this->teacherStudentEloquentRepository->find($id);
        $processProject = $this->processProjectEloquentRepository->findByAttribute('teacher_student_id', $id);
        return view('teacher.process_project_info', compact('teacherStudent', 'processProject'));
    }

    public function rateProcessProjectStudent(Request $request)
    {
        if ($this->processProjectEloquentRepository->rateByTeacher($request->all())) {
            Session::flash(STR_FLASH_SUCCESS, 'Nhận xét tiến độ thành công');
        } else {
            Session::flash(STR_FLASH_ERROR, 'Xảy ra lỗi trong quá trình xử lý');
        }
        return redirect()->back();
    }
}
