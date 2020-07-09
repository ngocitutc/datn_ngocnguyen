<?php

namespace App\Http\Controllers\Admin;

use App\Exports\DeansExport;
use App\Exports\StudentsExport;
use App\Exports\TeachersExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Repositories\ProfileEloquentRepository;
use App\Repositories\UserEloquentRepository;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    private $userEloquentRepository;
    private $profileEloquentRepository;

    public function __construct(
        UserEloquentRepository $userEloquentRepository,
        ProfileEloquentRepository $profileEloquentRepository
    ) {
        $this->userEloquentRepository = $userEloquentRepository;
        $this->profileEloquentRepository = $profileEloquentRepository;
    }

    public function index()
    {
        return view('admin.index');
    }

    public function userCreate()
    {
        return view('admin.user.create');
    }

    public function storeCreate(UserRequest $request)
    {
        if ($this->userEloquentRepository->storeUser($request->all())) {
            Session::flash(STR_FLASH_SUCCESS, 'Thêm mới thành công');
            return response()->json(['save' => true]);
        } else {
            Session::flash(STR_FLASH_ERROR, 'Thêm mới thất bại');
            return response()->json(['save' => false]);
        }
    }

    public function userIndex()
    {
        $data = $this->userEloquentRepository->getDataUser();
        return view('admin.user.index', compact('data'));
    }

    public function exportFile($role)
    {
        if ($role == STUDENT) {
            return Excel::download(new StudentsExport(), 'students.xlsx');
        }
        if ($role == TEACHER) {
            return Excel::download(new TeachersExport(), 'teachers.xlsx');
        }
        if ($role == DEAN) {
            return Excel::download(new DeansExport(), 'deans.xlsx');
        }
        Session::flash(STR_FLASH_ERROR, 'Tải file mẫu thất bại');
        return response()->json(['save' => false]);
    }

    public function listTeacher()
    {
        return view('admin.user.list_teacher');
    }

    public function listStudent()
    {
        return view('admin.user.list_student');
    }

    public function listProjectStudent()
    {
        return view('admin.user.list_project_student');
    }
}
