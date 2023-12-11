<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GigModel;
use App\Models\SetlistModel;
use Illuminate\Support\Facades\DB;

class SetlistController extends Controller
{
    public $setlist;
    public $gig;
    public function __construct()
    {
        $this->setlist   = new SetlistModel;
        $this->gig       = new GigModel;
        $this->app_key   = config('app.key');
    }
    public function index(){
        $data['title'] = 'Setlist';
        return view('admin.contents.setlist.setlist')->with($data);
    }

    public function get_gigs(){


        $items = DB::table('gigs')->leftJoin('members', 'members.member_id', '=', 'gigs.m_id')->orderBy('gigs.created', 'desc')->get();


        $data = [];
        foreach ($items as $row) {

            $data[] = array(

                    'date'              => $row->date,
                    'event'             => $row->event,
                    'time'              => $row->time,
                    'full_name'         => $row->full_name,
                    'gig_id'            => $row->gig_id,
                    'location'          => $row->location,
                    'member_id'         => $row->member_id,
                    'number_of_sets'    => $row->number_of_sets,
                    'x'                 => date('Y-m-d', time()) == date('Y-m-d', strtotime($row->date)) ? true : false
            );
            // code...
        }


        return response()->json($data);

    }




    public function add_gig(Request $request){


        $id = $request->input('gig_id');
        $items = array(

            'location'          => $request->input('location'),
            'date'              => $request->input('date'),
            'event'             => $request->input('event'),
            'number_of_sets'    => $request->input('number_of_sets'),
            'created'           => date('Y-m-d H:i:s', time()),
            'm_id'              => 12
        );



        if (empty($id)) {

        $add = DB::table('gigs')->insert($items);
        if ($add) {
                $data = array('message' => 'Add Successfully' , 'response' => true );
                }else {
                $data = array('message' => 'Something Wrong' , 'response' => false );}
        
        }else {

            $update = DB::table('gigs')->where('gig_id', $id)->update($items);

            if ($update) {

                $data = array('message' => 'Updated Successfully' , 'response' => true );

            }else {

                $data = array('message' => 'Something Wrong/No Changes Apply' , 'response' => false );
            }
        }
        
      
        return response()->json($data);


    }


    public function table_view(){


        $data['title'] = 'Setlist Table View';
        return view('admin.contents.setlist.table_view.table')->with($data);


    }
}
