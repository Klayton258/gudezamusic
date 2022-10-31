<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{

    function index()
    {

        return view('user.profile');

    }

    function profileConfig()
    {
        return view('user.updateProfile');
    }

    function posts()
    {
        return view('user.posts');
    }

    function leadForm()
    {
        return view('lead');
    }

    function lead(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name'=> 'required|unique:leads,name',
            'birthday'=> 'required|date',
            'phone'=> 'required|unique:leads,phone|min:9|max:9',
            'gener'=> 'required',
            'nacionality'=> 'required',
            'residence'=> 'required',
            'civilstate'=> 'required',
            'ocupation'=> 'required',
            'favorite_music_gener'=> 'required',
            'favorite_social_media'=> 'required',
            'favorite_digital_portal'=> 'required',
            'favorite_activity'=> 'required',
            'degree_level'=> 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route('leadform'))->withErrors($validator)
            ->withInput();
        }

        $id = DB::table('leads')->insertGetId([
            'name'=>$request->name,
            'birthday'=>$request->birthday,
            'phone'=>$request->phone,
            'gener'=>$request->gener,
            'nacionality'=>$request->nacionality,
            'residence'=>$request->residence,
            'civilstate'=>$request->civilstate,
            'ocupation'=>$request->ocupation,
            'favorite_music_gener'=>$request->favorite_music_gener,
            'favorite_social_media'=>$request->favorite_social_media,
            'favorite_digital_portal'=>$request->favorite_digital_portal,
            'favorite_activity'=>$request->favorite_activity,
            'degree_level'=>$request->degree_level,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        return redirect(route('home'));
    }


    function regist(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name'=> 'required',
            'birthdate'=> 'required',
            'username'=> 'required|unique:clients,username|min:4|max:9',
            'email'=> 'required|email|unique:clients,email',
            'phone'=> 'required',
            'password'=> 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        if ($validate->fails()) {

            return redirect(route('signup'))->withErrors($validate);
        }
        Client::create($request->all());

            return redirect(route('registVerify'));
    }

    function registrationEmailVerify(){

        return view('user.emailVerify');
    }

    function loginValidate(Request $request){

       $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

       if(Auth::guard('clients')->attempt([$fieldType => $request->email, 'password' =>
        $request->password])) {
            return redirect(url('/profile'))->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
        }
        return redirect(url('/login'))->withErrors(['error'=>'Login invalido, as suas credenciais sao incorretas!']);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    function updateProfile(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name'=> 'required',
            'birthdate'=> 'required',
            'username'=> 'required',
            'email'=> 'required|email|unique:clients,email,'.$request->id.',id',
            'phone'=> 'required',
            'password'=> 'required_with:password_confirmation|same:password_confirmation',
        ]);

        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate);
        }

        $client = Client::find($request->id);

        $client->name = $request->name;
        $client->birthdate = $request->birthdate;
        $client->username = $request->username;
        $client->email = $request->email;
        $client->phone = $request->phone;

        if($request->password != null){
            $client->password = $request->password;
        }

        if($client->getOriginal('email') != $client->email){
            $client->email_verified = 0;
        }

        if ($request->hasFile('avatar')) {
            $relPath = '\images\users\profiles'.'\\'.$request->id;

            if (!file_exists(public_path($relPath))) {
                mkdir(public_path($relPath), 777, true);
            }

            $size=20;
            $image = $request->file('avatar');
            $imageName =uniqid().'.png';
            $img = Image::make($image)->resize(500,500);
            $img->orientate();
            $img->save(public_path().$relPath.'\\'.$imageName,$size);;
            $client->avatar = $imageName;
        }

        $client->save();

        return back()->with('success', 'Perfil atualizado com sucesso.');
    }
}
