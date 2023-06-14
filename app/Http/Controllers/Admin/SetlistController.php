<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetlistController extends Controller
{
    public function index(){
        $data['title'] = 'Setlist';
        return view('admin.contents.setlist.setlist')->with($data);
    }
}
