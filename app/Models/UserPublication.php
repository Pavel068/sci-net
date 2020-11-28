<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPublication extends Model
{
    protected $table = 'users_publications';

    protected $fillable = ['user_id', 'publication_id'];
}
