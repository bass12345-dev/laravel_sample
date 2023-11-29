<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    use HasFactory;

    protected $table = 'song_type';

    protected $fillable = [
        'song_type_id',
        'type',
    ];

    public $timestamps = false;
}
