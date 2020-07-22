<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Semester extends Model
{
    use SoftDeletes;

    protected $table = 'semester';

    protected $fillable = [
        'user_created_id',
        'period',
        'period_year',
        'date_start',
        'date_end',
        'sum_student',
        'note',
    ];
}