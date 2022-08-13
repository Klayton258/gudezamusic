<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{

    function index()
    {

        return view('user.profile');

    }

    function posts()
    {
        return view('user.posts');
    }


    function regist(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name'=> 'required',
            'birthdate'=> 'required',
            'username'=> 'required',
            'email'=> 'required|email|unique:client,email',
            'phone'=> 'required',
            'password'=> 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        if ($validate->fails()) {

            return back()->withErrors('error',$validate);
        }

        $id = DB::table('clients')->insertGetId([
            'name'=> $request->name ,
            'birthdate'=> $request->birthdate ,
            'username'=> $request->username ,
            'email'=> $request->email ,
            'phone'=> $request->phone ,
            'create_at'=> now() ,
            'update_at'=> now() ,
        ]);

        if($id > 0){

            return redirect(route('registrationEmailVerify'));
        }else{
            return back()->withErrors('error',"an error occured during the registration please contact the support support@gudezamusic.com");
        }
    }
}
