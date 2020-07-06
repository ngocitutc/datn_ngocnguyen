<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Repositories\ProfileEloquentRepository;
use App\Repositories\TopEloquentRepository;
use App\Repositories\UserEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    private $topEloquentRepository;
    private $profileEloquentRepository;

    public function __construct(
        TopEloquentRepository $topEloquentRepository,
        ProfileEloquentRepository $profileEloquentRepository
    )
    {
        $this->topEloquentRepository = $topEloquentRepository;
        $this->profileEloquentRepository = $profileEloquentRepository;
    }

    public function getTopics()
    {
        $data = $this->topEloquentRepository->getAllTopicByTeacher(Auth::user()->id);
        return view('teacher.topic_index', compact('data'));
    }

}
