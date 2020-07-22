<?php

namespace App\Repositories;

use App\Models\Project;
use App\Models\Semester;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SemesterEloquentRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return Semester::class;
    }

    public function getSemester($period, $period_year)
    {
        return $this->model->where('period', $period)->where('period_year', $period_year)->first();
    }

    public function createRecord($attributes)
    {
        DB::beginTransaction();
        try {
            $record = $this->model->where('period', $attributes['period'])->where('period_year', $attributes['period_year'])->first();
            if ($record) {
                $record->sum_student = $attributes['sum_student'] ?? 10;
                $record->note = $attributes['note'];
                $record->date_start = $attributes['date_start'];
                $record->date_end = $attributes['date_end'];
                $record->user_created_id = Auth::user()->id;
                $record->save();
            } else {
                $attributes['sum_student'] = $attributes['sum_student'] ?? 10;
                $this->create($attributes);
            }
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            return false;
        }
    }
}
