<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function index(){

        $data['title'] = 'Songs';
        return view('admin.contents.songs.songs')->with($data);
    }
}
