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

                    'date'    => $row->date,
                    'time'    => $row->time,
                    'full_name'    => $row->full_name,
                    'gig_id'    => $row->gig_id,
                    'location'    => $row->location,
                    'member_id'    => $row->member_id,
                    'number_of_sets'    => $row->number_of_sets
            );
            // code...
        }


        return response()->json($data);

    }
}
