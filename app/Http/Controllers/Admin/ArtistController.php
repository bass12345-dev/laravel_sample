<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArtistModel;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{

    public $artist;
    public function __construct()
    {
        $this->artist   = new ArtistModel;
        $this->app_key   = config('app.key');
    }

    public function index(){
        $data['title'] = 'Artist';
        return view('admin.contents.artist.artist')->with($data);
    }

    public function get_artists(){

        $items = DB::table('artist')->orderBy('artist.artist_name', 'asc')->get();

        $data = [];
        foreach ($items as $row) {

            $data[] = array(


                    'artist_name'        => $row->artist_name,
                    'artist_id'           => $row->artist_id
            );

        }

         return response()->json($data);
}

    public function search_artist(){

        echo $_GET['key'];


    }

}
