<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'password_show', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_code', 'email');
    }

    public function teacherStudent()
    {
        return $this->hasMany(TeacherStudent::class, 'teacher_id', 'id');
    }

    public function getTeacherByStudent()
    {
        return $this->hasMany(TeacherStudent::class, 'student_id', 'id');
    }

    public function getTeacherLastByStudent()
    {
        return $this->getTeacherByStudent->last();
    }
}
