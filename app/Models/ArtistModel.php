<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistModel extends Model
{
    use HasFactory;
    
    protected $table = 'artist';

    protected $fillable = [
        'artist_id',
        'artist_name',
        'artist_image',
    ];

    public $timestamps = false;
}
