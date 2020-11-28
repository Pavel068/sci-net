<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'keywords',
        'indexer',
        'journal',
        'year',
        'pages'
    ];
}
