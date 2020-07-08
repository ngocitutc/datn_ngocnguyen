<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class TeacherStudent extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'teacher_student';

    protected $fillable = [
        'teacher_id',
        'student_id',
        'status',
        'topic_id',
        'note',
        'rate_status',
        'rate_note',
        'rate_date',
        'status_topic',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

}
