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
        $data['position']   = config('app.position');

        return view('admin.contents.members.members')->with($data);
    }


    public function add_member(Request $request){


        $id = $request->input('member_id');
        $items = array(
            'full_name'             => $request->input('name'),
            'position'              => $request->input('position'),
            'type'                  => $request->input('type'), 
            'created'               => date('Y-m-d H:i:s', time())
        );

        if (empty($id)) {

            $count = DB::table('members')
                ->where('full_name', 'like', $items['full_name'])
                ->count();


            

        if ($count > 0) {


            $data = array('message' => 'Artist Already Exist' , 'response' => false );

            // code...
        }else {

            $add = DB::table('members')->insert($items);
        if ($add) {
                $data = array('message' => 'Add Successfully' , 'response' => true );
                }else {
                $data = array('message' => 'Something Wrong' , 'response' => false );}
        }

        
        }else {



            $update = DB::table('members')->where('member_id', $id)->update($items);

            if ($update) {

                $data = array('message' => 'Updated Successfully' , 'response' => true );

            }else {

                $data = array('message' => 'Something Wrong/No Changes Apply' , 'response' => false );
            }
        }
        
      
        return response()->json($data);


    }


    public function delete_member(Request $request){

        $id = $request->input('id');

        if (is_array($id)) {
                foreach ($id as $row) {
                $delete =  MembersModel::where('member_id', $row)->delete();
                }
                $data = array('message' => 'Deleted Succesfully' , 'response' => true);
            }else{
                 $data = array('message' => 'Error' , 'response' => false );
            }

          return response()->json($data);
    }


    public function delete_session(Request $request){

        $id = $request->input('id');

        if (is_array($id)) {
                foreach ($id as $row) {
                $delete =  MembersModel::where('member_id', $row)->delete();
                }
                $data = array('message' => 'Deleted Succesfully' , 'response' => true);
            }else{
                 $data = array('message' => 'Error' , 'response' => false );
            }

          return response()->json($data);
    }



    public function get_members(){

        $items = DB::table('members')->orderBy('full_name', 'asc')->get();
        $data = [];
        foreach ($items as $row) {

            $data[] = array(

                    'full_name'        => $row->full_name,
                    'member_id'        => $row->member_id,
                    'position'         => $row->position,
                    'type'             => $row->type,
                    'count_song'       => DB::table('singer_songs')->where('si_id',$row->member_id)->count()

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


    public function get_singer_sessions(){

        $items = DB::table('members')->where('type','session')->where('position','singer')->orderBy('full_name', 'asc')->get();
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
