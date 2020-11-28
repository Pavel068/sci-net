<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static where(string $string, $email)
 */
class User extends Model
{
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'email',
        'phone',
        'password',
        'birthday',
        'region',
        'city',
        'organization',
        'position',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
