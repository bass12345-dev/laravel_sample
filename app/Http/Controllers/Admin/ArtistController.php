<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index(){
        $data['title'] = 'Artist';
        return view('admin.contents.artist.artist')->with($data);
    }
}
