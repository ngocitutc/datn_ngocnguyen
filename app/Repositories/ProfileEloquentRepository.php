<?php

namespace App\Repositories;

use App\Models\Profile;

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
