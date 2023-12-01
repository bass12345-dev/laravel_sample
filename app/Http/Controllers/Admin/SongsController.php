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
        $data['song_type']          = DB::table('song_type')->orderBy('song_type.type', 'asc')->get();
        return view('admin.contents.songs.songs')->with($data);
    }

     public function view_song(){

       
        $id                        = $_GET['id'];
        $option                    = $_GET['option'];
        $data['title']             = DB::table('members')->where('member_id', $id)->first()->full_name;
        $data['options']           = DB::table('song_type')->orderBy('song_type.type', 'asc')->get();
  


        $data['songs']             = $option != 'all' ? $this->get_singer_songs_view_by_option($id,$option) : $this->get_singer_songs_view_no_option();    


        return view('admin.contents.view_singer_songs.singer_songs')->with($data);



    }

    function get_singer_songs_view_by_option($id,$option){
        $songs = DB::table('songs as songs')
                                     ->leftJoin('singer_songs as singer_songs', 'singer_songs.so_id', '=', 'songs.song_id')
                                     ->leftJoin('artist as artist', 'artist.artist_id', '=', 'songs.artist_id')
                                     ->select('songs.song_id as song_id','songs.song_title as song_title','songs.s_type as s_type','songs.key_c as key_c',
                                             'songs.wedding_song as wedding_song', 
                                             'artist.artist_id as   artist_id', 'artist.artist_name as artist_name')->where('singer_songs.si_id',$id)->where('songs.s_type',$option)->orderBy('songs.song_title', 'asc')->get();

        return $songs;
    }

     function get_singer_songs_view_no_option(){
        $songs = DB::table('songs as songs')
                                     ->leftJoin('singer_songs as singer_songs', 'singer_songs.so_id', '=', 'songs.song_id')
                                     ->leftJoin('artist as artist', 'artist.artist_id', '=', 'songs.artist_id')
                                     ->select('songs.song_id as song_id','songs.song_title as song_title','songs.s_type as s_type','songs.key_c as key_c',
                                             'songs.wedding_song as wedding_song', 
                                             'artist.artist_id as   artist_id', 'artist.artist_name as artist_name')->orderBy('songs.song_title', 'asc')->get();

        return $songs;
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

        $items = DB::table('songs as songs')
                ->leftJoin('artist as artist', 'artist.artist_id', '=', 'songs.artist_id')
                ->select('songs.song_id as song_id','songs.song_title as song_title','songs.s_type as s_type','songs.key_c as key_c',
                         'songs.wedding_song as wedding_song', 
                         'artist.artist_id as   artist_id', 'artist.artist_name as artist_name')->orderBy('songs.song_title', 'asc')->get();
        $data = [];
        foreach ($items as $row) {

            $data[] = $row;
        }


        return response()->json($data);

    }


        public function add_song(Request $request){


        $id = $request->input('song_id');
        $items = array(
                            'song_title'         =>  $request->input('song_title'),
                            'artist_id'          =>  $request->input('artist_id'),
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

            $update = DB::table('songs')->where('song_id', $id)->update($items);

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




        public function get_singer_songs(){

        $id = $_GET['id'];

        $items = DB::table('songs as songs')
                 ->leftJoin('singer_songs as singer_songs', 'singer_songs.so_id', '=', 'songs.song_id')
                 ->leftJoin('artist as artist', 'artist.artist_id', '=', 'songs.artist_id')
                 ->select('songs.song_id as song_id','songs.song_title as song_title','songs.s_type as s_type','songs.key_c as key_c',
                         'songs.wedding_song as wedding_song', 
                         'artist.artist_id as   artist_id', 'artist.artist_name as artist_name')->where('singer_songs.si_id',$id)->orderBy('songs.song_title', 'asc')->get();


        $data = [];
        foreach ($items as $row) {

            $data[] = $row;
        }


        return response()->json($data);

    }




}
