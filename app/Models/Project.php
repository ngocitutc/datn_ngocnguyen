<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table = 'project';

    protected $fillable = [
        'id_teacher_student',
        'program_lan',
        'program_tool',
        'link_word',
        'link_code',
        'description',
    ];
}