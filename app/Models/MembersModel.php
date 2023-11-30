<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersModel extends Model
{
    use HasFactory;
    
    protected $table = 'members';

    protected $fillable = [
        'member_id',
        'full_name',
        'position',
        'created',
        'email',
        'phone_number',
        'username',
        'password',
        'profile_pic',
        'type'
    ];

    public $timestamps = false;
}
