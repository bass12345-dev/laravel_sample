<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function index(){
        $data['title'] = 'Singers';
        return view('admin.contents.singers.singers')->with($data);
    }
}
