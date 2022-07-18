<?php

namespace App\Http\Controllers;

use App\API\Control;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isEmpty;

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

        $artists = DB::table('artists')->get();
        return view('artistas',['artists'=> $artists]);
        }else{
            Control::access();
            return  redirect("https://google.com");
        }
    }

    function musicas(){

        $albums = DB::table('musics')->where('m_album','=','true')->orderByDesc('id')->paginate(3);
        $musics = DB::table('musics')->where('m_album','=','false')->paginate(8);

        return view('musicas',['albums'=> $albums,'musics'=> $musics]);
    }

    function sobrenos(){


        return view('sobrenos');
    }

    function videos(){

        $data = DB::table('videos')->orderByDesc('id')->get();
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


    public function emailverify($id){
        try{

            $verified = DB::table('users')->where('email_verified_at','=',null)->get();

            $url = 'http://dash.gudezamusic.com';

            if(isEmpty($verified)){
                return redirect($url);
            }else{
                $verify = DB::table('users')->where(['id'=>$id])->update([
                 'email_verified_at'=>Now()
                 ]);

                 if($verify){
                     return redirect($url);
                    }
            }

        } catch (\Exception $e) {
            if (config('app.debug')) {
                $level = 'error';
                 $message = "Send Email Error: ";
                 $data = "Send email Error: ".$e->getMessage();
                 Log::channel('main')->$level($message." [".$data."]");
        }
        $level = 'error';
                 $message = "Send Email Error: ";
                 $data = "Send email Error: ".$e->getMessage();
                 Log::channel('main')->$level($message." [".$data."]");
     }
    }

    public function subscribe(Request $request){
       try{
            $request->checkbox;
            $request->email;

            return redirect()->back();

        } catch (\Exception $e) {
            if (config('app.debug')) {
                $level = 'error';
                $message = "Error Subscribing: ";
                $data = "Send email Error: ".$e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
            }

            $level = 'error';
            $message = "Error Subscribing: ";
            $data = "Send email Error: ".$e->getMessage();
            Log::channel('main')->$level($message." [".$data."]");
        }
    }

}
