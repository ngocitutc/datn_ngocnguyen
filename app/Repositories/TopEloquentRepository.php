<?php

namespace App\Repositories;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TopEloquentRepository extends BaseRepository
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
        return $this->model->where('user_created', $idTeacher)->get()->toArray();
    }
}
