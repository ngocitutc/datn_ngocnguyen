<?php

namespace App\Repositories\User;

use App\Models\Profile;
use App\Repositories\BaseRepository;

class ProfileEloquentRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return Profile::class;
    }
}
