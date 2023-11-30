<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembersModel;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public $members;
    public function __construct()
    {
        $this->members   = new MembersModel;
        $this->app_key   = config('app.key');
    }
    public function index(){
        $data['title'] = 'Members';

        return view('admin.contents.members.members')->with($data);
    }


    public function get_members(){

        $items = DB::table('members')->where('type','member')->orderBy('full_name', 'asc')->get();
        $data = [];
        foreach ($items as $row) {

            $data[] = array(

                    'full_name'        => $row->full_name,
                    'member_id'        => $row->member_id,
                    'position'         => $row->position

            );
        }


        return response()->json($data);
    }


    public function get_singer_members(){

        $items = DB::table('members')->where('type','member')->where('position','singer')->orderBy('full_name', 'asc')->get();
        $data = [];
        foreach ($items as $row) {

            $data[] = array(

                    'full_name'        => $row->full_name,
                    'member_id'        => $row->member_id,
                    'position'         => $row->position

            );
        }


        return response()->json($data);
    }
}
