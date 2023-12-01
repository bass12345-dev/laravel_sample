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


    public function add_artist(Request $request){


        $id = $request->input('artist_id');
        $items = array('artist_name'          => $request->input('artist'),'created' => '2022-02-12 02:17:52');

        if (empty($id)) {
        $add = DB::table('artist')->insert($items);
        if ($add) {
                $data = array('message' => 'Add Successfully' , 'response' => true );
                }else {
                $data = array('message' => 'Something Wrong' , 'response' => false );}
        }else {

            $update = DB::table('artist')->where('artist_id', $id)->update($items);

            if ($update) {

                $data = array('message' => 'Updated Successfully' , 'response' => true );

            }else {

                $data = array('message' => 'Something Wrong/No Changes Apply' , 'response' => false );
            }
        }
        
      
        return response()->json($data);


    }

    public function index(){
        $data['title'] = 'Artist Song';
        $id = $_GET['id'];
        $data['song'] = DB::table('artist as artist')
                ->leftJoin('songs as songs', 'songs.artist_id', '=', 'artist.artist_id')
                ->leftJoin('song_type as song_type', 'song_type.song_type_id', '=', 'songs.s_type')
                ->select('songs.song_id as song_id','songs.song_title as song_title','songs.s_type as s_type','songs.key_c as key_c',
                         'songs.wedding_song as wedding_song', 'song_type.type as type',
                         'artist.artist_id as   artist_id', 'artist.artist_name as artist_name')->where('artist.artist_id', $id )->orderBy('songs.song_title', 'asc')->get();
        return view('admin.contents.artist.artist')->with($data);

              
    }


    public function get_artists(){

        $items = DB::table('artist')->orderBy('artist_name', 'asc')->get();

        $data = [];
        foreach ($items as $row) {

            $data[] = array(


                    'artist_name'        => $row->artist_name,
                    'artist_id'           => $row->artist_id
            );

        }

         return response()->json($data);
}


    public function delete_artist(Request $request){

        $id = $request->input('id');

        if (is_array($id)) {
                foreach ($id as $row) {
                $delete =  ArtistModel::where('artist_id', $row)->delete();
                }
                $data = array('message' => 'Deleted Succesfully' , 'response' => true);
            }else{
                 $data = array('message' => 'Error' , 'response' => false );
            }

          return response()->json($data);
    }

    public function search_artist(){

        $search = $_GET['key'];
        $artist = ArtistModel::select("artist_id", "artist_name")
                       ->where("artist_name", 'LIKE', "%".$search."%")
                       ->get();



        
        $data     = [];
        foreach ($artist as $row) {
            $data[] = $row;
        }

        echo json_encode($data);


    }

}
