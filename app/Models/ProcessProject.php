<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProcessProject extends Model
{
    use SoftDeletes;

    protected $table = 'process_project';

    protected $fillable = [
        'teacher_student_id',
        'title',
        'content',
        'link_file',
        'note',
        'note_by_teacher',
    ];
}