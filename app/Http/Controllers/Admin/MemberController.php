<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $data['title'] = 'Members';
        return view('admin.contents.members.members')->with($data);
    }
}
