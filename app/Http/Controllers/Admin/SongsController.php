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

        $data['singers']            = DB::table('members')->where('position','singer')->orderBy('full_name', 'asc')->get();
        return view('admin.contents.songs.songs')->with($data);
    }

     public function view_song(){

       
        $id                        = $_GET['id'];
        $option                    = $_GET['option'];
        $data['title']             = DB::table('members')->where('member_id', $id)->first()->full_name;
        $data['options']           = DB::table('song_type')->orderBy('song_type.type', 'asc')->get();
  


        $data['songs']             = $option != 'all' ? $this->get_singer_songs_view_by_option($id,$option)->get() : $this->get_singer_songs_view_no_option($id)->get();

        $data['count']             =  $option != 'all' ? $this->get_singer_songs_view_by_option($id,$option)->count() : $this->get_singer_songs_view_no_option($id)->count();  


        return view('admin.contents.view_singer_songs.singer_songs')->with($data);



    }

    function get_singer_songs_view_by_option($id,$option){
        $songs = DB::table('songs as songs')
                                     ->leftJoin('singer_songs as singer_songs', 'singer_songs.so_id', '=', 'songs.song_id')
                                     ->leftJoin('artist as artist', 'artist.artist_id', '=', 'songs.artist_id')
                                     ->select('songs.song_id as song_id','songs.song_title as song_title','songs.s_type as s_type','songs.key_c as key_c',
                                             'songs.wedding_song as wedding_song', 
                                             'artist.artist_id as   artist_id', 'artist.artist_name as artist_name')->where('singer_songs.si_id',$id)->where('songs.s_type',$option)->orderBy('songs.song_title', 'asc');

        return $songs;
    }

     function get_singer_songs_view_no_option($id){
        $songs = DB::table('songs as songs')
                                     ->leftJoin('singer_songs as singer_songs', 'singer_songs.so_id', '=', 'songs.song_id')
                                     ->leftJoin('artist as artist', 'artist.artist_id', '=', 'songs.artist_id')
                                     ->select('songs.song_id as song_id','songs.song_title as song_title','songs.s_type as s_type','songs.key_c as key_c',
                                             'songs.wedding_song as wedding_song', 
                                             'artist.artist_id as   artist_id', 'artist.artist_name as artist_name')->where('singer_songs.si_id',$id)->orderBy('songs.song_title', 'asc');

        return $songs;
    }

    public function add_song_type(Request $request){


        $id = $request->input('type_id');
        $items = array('type'          => $request->input('type'));

        if (empty($id)) {


        $count = DB::table('song_type')
                ->where('type', 'like', $items['type'])
                ->count();

        if ($count > 0) {

            $data = array('message' => 'Type Already Exist' , 'response' => false );

        }else {

        $add = DB::table('song_type')->insert($items);
        if ($add) {
                $data = array('message' => 'Add Successfully' , 'response' => true );
                }else {
                $data = array('message' => 'Something Wrong' , 'response' => false );}

        }
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
                            'created'            => date('Y-m-d H:i:s', time())



                    );


        if (empty($id)) {


        $count = DB::table('songs')
                ->where('song_title', 'like', $items['song_title'])
                ->count();

        if ($count > 0) {

            $data = array('message' => 'Song Already Exist' , 'response' => false );

        }else {



        $add = DB::table('songs')->insert($items);
        if ($add) {
                $data = array('message' => 'Add Successfully' , 'response' => true );
                }else {
                $data = array('message' => 'Something Wrong' , 'response' => false );}

        }
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



    public function get_singer_songs1(Request $request){


        $items = DB::table('members')->where('position','singer')->orderBy('full_name', 'asc')->get();
        $song_id = $request->input('id');

        $data = [];
        foreach ($items as $row) {

            $member_id = $row->member_id;

            $x = DB::table('singer_songs')->where('si_id',$member_id)->where('so_id',$song_id)->count();



            $data[] = array(

                    'singer_name' => $row->full_name,
                    'singer_id'   => $row->member_id,
                    'x' => $x == 1 ? 'checked' : ''
            );
        }


        return response()->json($data);

    }





    public function add_singer_songs(Request $request){

        
        $id = $request->input('id');
        $song_id = $request->input('song_id');


    
            if (is_array($id)) {

                $delete = DB::table('singer_songs')->where('so_id',$song_id)->delete();
                foreach ($id as $row) {
                
                $item = array(

                        'so_id' => $song_id,
                        'si_id' => $row,
                        'created' => date('Y-m-d H:i:s', time())
                );



                $add = DB::table('singer_songs')->insert($item);
            }
                $data = array('message' => 'Added Succesfully' , 'response' => true);
            }else{
                 $data = array('message' => 'Error' , 'response' => false );
            }


            // code...
      


             return response()->json($data);

    }


        public function get_sipra_songs(){

        $items = DB::table('songs as songs')
                ->leftJoin('artist as artist', 'artist.artist_id', '=', 'songs.artist_id')
                ->select('songs.song_id as song_id','songs.song_title as song_title','songs.s_type as s_type','songs.key_c as key_c',
                         'songs.wedding_song as wedding_song', 
                         'songs.sipra_status as sipra_status', 
                          'songs.song_type as song_type', 
                         'artist.artist_id as   artist_id', 'artist.artist_name as artist_name')->orderBy('songs.song_title', 'asc')->get();
        $data = [];
        foreach ($items as $row) {

            $status = '';

            if ($row->sipra_status == 'siprado') {
                $status = '<span class="badge badge-success text-dark">Siprado</span>';
            }else if ($row->sipra_status == 'dili_siprado') {
                $status = '<span class="badge badge-danger text-dark">Dili Siprado</span>';
            }else if ($row->sipra_status == 'to_review') {
                $status = '<span class="badge badge-warning text-dark">To Review</span>';
            }

            $data[] = array(

                        'song_title'    => $row->song_title,
                        'artist_name'   => $row->artist_name,
                        'song_id'       => $row->song_id,
                        'status'        => $status,
                        'stat'          => $row->sipra_status,
                        'song_type'     => '<span class="badge badge-primary text-white">'.$row->song_type.'</span>'
            );
        }


        return response()->json($data);

    }


       public function update_sipra_status(Request $request){


        $id = $request->input('song_id');
        $items = array('sipra_status'          => $request->input('sipra_status'));



        $update = DB::table('songs')->where('song_id', $id)->update($items);

            if ($update) {

                $data = array('message' => 'Updated Successfully' , 'response' => true );

            }else {

                $data = array('message' => 'Something Wrong/No Changes Apply' , 'response' => false );
            }
        
        
      
        return response()->json($data);


    }



}
