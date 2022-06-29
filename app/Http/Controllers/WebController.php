<?php

namespace App\Http\Controllers;

use App\API\ApiLogs;
use App\API\ApiResponse;
use App\API\Control;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;

class WebController extends Controller
{

    public function index(){

        if(!Control::isPerson()){

            Control::access();

            $data = DB::table('home_slides')->limit(3)->orderByDesc('id')->get();
            return view('home', ['data'=>$data]);
        }else{
          return  redirect("https://google.com");
        }
    }

    function artistas(){
        if(!Control::isPerson()){

            Control::access();
        $artists = DB::table('artists')->get();
        // ApiLogs::apiLog('info',"Teste");
        return view('artistas',['artists'=> $artists]);
        }
    }

    function musicas(){

        $albums = DB::table('musics')->where('m_album','=','true')->get();
        $musics = DB::table('musics')->where('m_album','=','false')->paginate(8);

        return view('musicas',['albums'=> $albums,'musics'=> $musics]);
    }

    function sobrenos(){


        return view('sobrenos');
    }

    function videos(){

        $data = DB::table('videos')->get();
        return view('videos',['data'=> $data]);
    }

    function sogdetails($id){

        $data = DB::table('musics')->where('id','=', $id)->get();

        return view('musicstream',['musica'=> $data]);
    }

    function artista($id){

        $artist = DB::table('artists')->where('id','=',$id)->get();
        return view('artista',['artist'=> $artist]);
    }

    function admin(){
        return view('dashboard/index');
    }

}
