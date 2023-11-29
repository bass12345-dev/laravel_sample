<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongsModel extends Model
{
    use HasFactory;

    protected $table = 'songs';

     protected $fillable = [
        'song_id',
        'song_title',
        'artist_id',
        'lyrics',
        'song_type',
        's_type',
        'wedding_song',
        'key_c',
        'location',
        'created'
        
    ];

    public $timestamps = false;
}
