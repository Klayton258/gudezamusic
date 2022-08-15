<?php

namespace App\Http\Controllers;

use App\API\Control;
use App\Models\Subscribers;
use App\Notifications\emailSubscription;
use Egulias\EmailValidator\Result\ValidEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class WebController extends Controller
{

    public function index(){
        // return view('lead');

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

    /**
     * @var name, email, checked
     */
    public function subscribe(Request $request){
       try{

            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|unique:subscribers,sb_email',
            ]);

            if ($validator->fails()) {
                return back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $checked = $request->checkbox;
            $name = $request->name;
            $email = $request->email;



            if($checked != "on") {

                $id = DB::table('subscribers')->insertGetId([
                    'sb_name'=>$name,
                    'sb_email'=>$email,
                    'created_at'=>Now(),
                    'updated_at'=>Now()
                ]);

                $user = DB::table('subscribers')->where(['id'=>$id])->get();

                $level = 'info';
                $message = $id." \n ";
                $data = "Subscribing Result: ". $user;
                Log::channel('main')->$level($message." \n [".$data."] \n");

                Notification::route('mail', [
                    $email => $name,
                ])->notify(new EmailSubscription($id));


            }else{

                $id = DB::table('subscribers')->insertGetId([
                    'sb_name'=>$name,
                    'sb_email'=>$email,
                    'created_at'=>Now(),
                    'updated_at'=>Now()
                ]);

                $user = DB::table('subscribers')->where(['id'=>$id])->get();

                $level = 'info';
                $message = $id." \n ";
                $data = "Subscribing Result: ". $user;
                Log::channel('main')->$level($message." \n [".$data."] \n");


                Notification::route('mail', [
                    $email => $name,
                ])->notify(new EmailSubscription($id));

                return redirect(route('leadform'));
            }

            return redirect()->back();

        } catch (\Exception $e) {
            if (config('app.debug')) {
                $level = 'error';
                $message = "Error Subscribing: [ ".$request." ] \n ";
                $data = "Subscribing Error: ".$e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
            }

            $level = 'error';
            $message = "Error Subscribing: [ ".$request." ] \n ";
            $data = "Subscribing Error: ".$e->getMessage();
            Log::channel('main')->$level($message." [".$data."] \n");
        }
    }

    function emailunsubscribe($id){

        $id = Crypt::decrypt($id);

        try {

            Subscribers::where('id', $id)->delete();

            return redirect(env('APP_URL', 'https://gudezamusic.com'));

        } catch (\Exception $e) {
            if (config('app.debug')) {
                $level = 'error';
                $message = "Error unSubscribing: [ ".$id." ] \n ";
                $data = "Subscribing Error: ".$e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
            }

            $level = 'error';
            $message = "Error unSubscribing: [ ".$id." ] \n ";
            $data = "Subscribing Error: ".$e->getMessage();
            Log::channel('main')->$level($message." [".$data."]");
        }
    }

    public function signup(){
        return view('signup');
    }

    public function login(){

        return view('login');
    }

}
