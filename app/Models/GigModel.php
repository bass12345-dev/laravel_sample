<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigModel extends Model
{
    use HasFactory;

    protected $table = 'gigs';

    protected $fillable = [
        'gig_id',
        'location',
        'event',
        'number_of_sets',
        'date',
        'time',
        'created',
        'm_id'
    ];

    public $timestamps = false;
}
