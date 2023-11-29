<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeModel;
use App\Models\SongsModel;
use Illuminate\Support\Facades\DB;

class SongsController extends Controller
{
    public $type;
    public $songs;
    public function __construct()
    {
        $this->type   = new TypeModel;
        $this->song   = new SongsModel;
        $this->app_key   = config('app.key');
    }
    public function index(){

        $data['title']              = 'Songs';
        $data['modal_title_add']    = 'Add Song';
        $data['modal_title_update'] = 'Update Song';
        $data['song_type']          = DB::table('song_type')->get();
        return view('admin.contents.songs.songs')->with($data);
    }

    public function add_song_type(Request $request){


        $id = $request->input('type_id');
        $items = array('type'          => $request->input('type'));

        if (empty($id)) {
        $add = DB::table('song_type')->insert($items);
        if ($add) {
                $data = array('message' => 'Add Successfully' , 'response' => true );
                }else {
                $data = array('message' => 'Something Wrong' , 'response' => false );}
        }else {

            $update = DB::table('song_type')->where('song_type_id', $id)->update($items);

            if ($update) {

                $data = array('message' => 'Updated Successfully' , 'response' => true );

            }else {

                $data = array('message' => 'Something Wrong/No Changes Apply' , 'response' => false );
            }
        }
        
      
        return response()->json($data);


    }

    public function get_types(){

        $items = DB::table('song_type')->orderBy('song_type.type', 'asc')->get();

        $data = [];
        foreach ($items as $row) {

            $data[] = array(


                    'type'        => $row->type,
                    'song_type_id'     => $row->song_type_id
            );
            // code...
        }


        return response()->json($data);

    }

    public function delete_type(Request $request){

        $id = $request->input('id');

        if (is_array($id)) {
                foreach ($id as $row) {
                $delete =  TypeModel::where('song_type_id', $row)->delete();
                }
                $data = array('message' => 'Deleted Succesfully' , 'response' => true);
            }else{
                 $data = array('message' => 'Error' , 'response' => false );
            }

          return response()->json($data);
    }



    //SONGS


    public function get_songs(){

        $items = DB::table('songs')->orderBy('songs.song_title', 'asc')->get();

        $data = [];
        foreach ($items as $row) {

            $data[] = array(


                    'song_title'        => $row->song_title,
                    'song_id'           => $row->song_id
            );
            // code...
        }


        return response()->json($data);

    }


        public function add_song(Request $request){


        $id = $request->input('song_id');
        $items = array(
                            'song_title'         => $request->input('song_title'),
                            'artist_id'          =>  $request->input('artist'),
                            's_type'             =>  $request->input('song_type'),
                            'wedding_song'       =>  $request->input('wedding') == 'on' ? 'yes' : 'no',
                            'key_c'              =>  $request->input('key_chords'),
                            'created'            => '2022-02-12 02:17:52'



                    );


        if (empty($id)) {
        $add = DB::table('songs')->insert($items);
        if ($add) {
                $data = array('message' => 'Add Successfully' , 'response' => true );
                }else {
                $data = array('message' => 'Something Wrong' , 'response' => false );}
        }else {

            $update = DB::table('song_type')->where('song_type_id', $id)->update($items);

            if ($update) {

                $data = array('message' => 'Updated Successfully' , 'response' => true );

            }else {

                $data = array('message' => 'Something Wrong/No Changes Apply' , 'response' => false );
            }
        }
        
      
        return response()->json($data);


    }


    public function delete_song(Request $request){

        $id = $request->input('id');

        if (is_array($id)) {
                foreach ($id as $row) {
                $delete =  SongsModel::where('song_id', $row)->delete();
                }
                $data = array('message' => 'Deleted Succesfully' , 'response' => true);
            }else{
                 $data = array('message' => 'Error' , 'response' => false );
            }

          return response()->json($data);
    }



}
