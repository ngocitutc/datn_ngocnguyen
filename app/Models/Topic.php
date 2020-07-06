<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Topic extends Authenticatable
{
    use SoftDeletes;
    use SoftDeletes;

    protected $table = 'topics';

    protected $fillable = [
        'name',
        'user_created',
        'role_created',
        'status',
        'date_active',
        'note',
    ];
}
