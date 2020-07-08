<?php

namespace App\Repositories;

use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectEloquentRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return Project::class;
    }

    public function createRecord($attributes)
    {
        DB::beginTransaction();
        try {
            $this->create($attributes);
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }
}
