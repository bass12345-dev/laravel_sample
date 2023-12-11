<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class SipraController extends Controller
{
   
    public function index(){

        $data['title'] = 'Manage Sipra';
        return view('admin.contents.sipra.sipra')->with($data);
    }
}
