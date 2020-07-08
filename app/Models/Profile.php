<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $table = 'profiles';

    protected $fillable = [
        'user_code',
        'user_name',
        'name',
        'birthday',
        'gender',
        'phone_number',
        'user_email',
        'address',
        'subject',
    ];
}
