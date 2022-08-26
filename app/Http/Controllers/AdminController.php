<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Lead;
use App\Models\Subscribers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $user = Auth::guard('users')->user();

        $user = [
            'name'=>$user->name
        ];

        $Recentclients = Client::whereRaw('Date(created_at) = CURDATE()');
        $Recentclients = Client::all();

        return view('admin.home', ['user'=>$user,'data'=>$data,'NewClients'=>$Recentclients]);
    }

    function login()
    {
        return view('admin.login');
    }

    function ApiLogin(Request $request)
    {
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

       if(Auth::guard('users')->attempt([$fieldType => $request->username, 'password' =>
        $request->password])) {

            $user = User::where($fieldType, $request->username)->first();

            $token = $user->createToken($request->device_name)->plainTextToken;

            session()->put('token',$token);

            return redirect(route('dash'));
        }
        return redirect(route('loginAdmin'))->withErrors(['error'=>'Login invalido, as suas credenciais sao incorretas!']);

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
        $user = Auth::guard('users')->user();

        $user = [
            'name'=>$user->name
        ];

        return view('admin.create',['user'=>$user]);
    }
}
