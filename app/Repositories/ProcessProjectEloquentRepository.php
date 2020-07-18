<?php

namespace App\Repositories;

use App\Models\ProcessProject;
use Illuminate\Support\Facades\DB;

class ProcessProjectEloquentRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return ProcessProject::class;
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

    public function findByAttribute($attribute, $value)
    {
        return $this->model->where($attribute, $value)->get();
    }
}
