<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetlistModel extends Model
{
    use HasFactory;

    protected $table = 'setlists';

    protected $fillable = [
        'setlist_id',
        'g_id',
        'setlist',
        'son_id',
        'set_number',
        'singe_id',
        'created'
    ];

    public $timestamps = false;
}
