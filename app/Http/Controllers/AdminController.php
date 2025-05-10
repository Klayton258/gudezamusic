<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Lead;
use App\Models\Subscribers;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    function index()
    {
        $clients = Client::all()->count();
        $subscribers = Subscribers::all()->count();
        $lead = Lead::all()->count();

        $data =[
            'totalClients'=>$clients,
            'totalSubscribers'=>$subscribers,
            'totalLeads'=>$lead,
        ];

        $Recentclients = Client::whereRaw('Date(created_at) = CURDATE()');
        $Recentclients = Client::all();

        return view('admin.home', ['user'=>Auth::guard('users')->user(),'data'=>$data,'NewClients'=>$Recentclients]);
    }

    function login()
    {

        Log::channel('main')->info("regdsgfsd");
        if(Auth::guard('users')->check()){

            return redirect(route('dash'));
        }
        return view('admin.login');
    }

    function dashLogin(Request $request)
    {
        try {
            $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if(Auth::guard('users')->attempt([$fieldType => $request->username, 'password' =>
         $request->password])) {
             $user = User::where($fieldType, $request->username)->first();

             $token = $user->createToken($request->device_name)->plainTextToken;

             session()->put('token',$token);

             Log::channel('main')->info("New seeesion: ". $user->id);
             return redirect(route('dash'));
            }

            Log::channel('main')->info("Wrong credentials");
         return redirect(route('loginAdmin'))->withErrors(['error'=>'Login invalido, as suas credenciais sao incorretas!']);


       } catch (Exception $e) {
        $level = 'error';
        $message = "BackOffice Error Login ";
        $data = " Name: ".$request->name."- User: "
        .$request->username." role- "
        .$request->role_id.' >>>>> '
        .$e->getMessage();
        Log::channel('main')->$level($message." [".$data."]");
        return back();
       }
    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    function createUser()
    {

        return view('admin.create',['user'=>Auth::guard('users')->user()]);
    }

    function newUser(Request $request)
    {

            try {

                DB::table('users')->insert([
                    'role_id'=> $request->role_id,
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'username'=> $request->username,
                    'password'=> Hash::make($request->password),
                    'created_at'=>now(),
                    'updated_at'=>now(),

                ]);

                $from = ['email'=>env('MAIL_FROM_ADDRESS')];

                $id = DB::table('users')->where(['email'=> $request->email])->first();

                $data =['username'=>$request->username, 'password'=>$request->password, 'url'=>url('/verifyemail/'.$id->id)];

                    Mail::send('mail.credentials', $data, function($m) use ($request,$from){
                        $m->from('gudeza@gudezamusic.com', env('APP_NAME'));
                        $m->to($request->email)->subject('Account Created');
                    });

                    $level = 'info';
                    $message = "BackOffice User Created: ";
                    $data = " Name: ".$request->name."- User: ".$request->username;
                    Log::channel('main')->$level($message." [".$data."]");

                    return back()->with('success', 'Novo User Utilizador com sucesso.');


           } catch (\Exception $e) {
               if (config('app.debug')) {
                $level = 'error';
                    $message = "BackOffice Error Creating User: ";
                    $data = " Name: ".$request->name."- User: "
                    .$request->username." role- "
                    .$request->role_id.' >>>>> '
                    .$e->getMessage();

                    Log::channel('main')->$level($message." [".$data."]");
                    return back()->with('erro', 'Erro ao criar Utilizador.');
               }
                $level = 'error';
                    $message = "BackOffice Error Creating User: ";
                    $data = " Name: ".$request->name."- User: "
                    .$request->username." role- "
                    .$request->role_id.' >>>>> '
                    .$e->getMessage();

                    Log::channel('main')->$level($message." [".$data."]");
                    return back()->with('erro', 'Erro ao criar Utilizador.');
           }

    }

    function uploadmusic()
    {

        return view('admin.musics.uploadmusic',['user'=>Auth::guard('users')->user()]);
    }

    function updateabout()
    {
        $about = About::all()->first();

        return view('admin.about.about', ['user'=>Auth::guard('users')->user(), 'about'=>$about]);
    }

    function refreshabout(Request $request)
    {

       try {

        $about = About::all()->first();

        if($about != null) {
        $about->title = $request->title;
        $about->content = $request->content;
        $about->save();
        }else{
        $about = DB::table('abouts')->insert([
            'title'=> $request->title,
            'content'=> $request->content,
            'created_at'=>now(),
            'updated_at'=>now(),

        ]);
        }

        return back()->with('success', 'Sobre nos atualizado com sucesso.', compact('about'));

       } catch (Exception $e) {

        return back()->with('erro', 'Erro ao atualizar sobre nos.');
       }

    }

    function subscribers()
    {
        $subscribers = Subscribers::all();

        return view('admin.subscribers.table', compact('subscribers'));
    }
}
