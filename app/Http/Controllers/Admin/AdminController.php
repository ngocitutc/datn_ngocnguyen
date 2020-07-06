<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Repositories\User\ProfileEloquentRepository;
use App\Repositories\User\UserEloquentRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $userEloquentRepository;
    private $profileEloquentRepository;

    public function __construct(
        UserEloquentRepository $userEloquentRepository,
        ProfileEloquentRepository $profileEloquentRepository
    )
    {
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
        $this->userEloquentRepository->storeUser($request->all());
    }
}
