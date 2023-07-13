<?php

namespace App\Http\Controllers;

use App\API\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class VideoController extends Controller
{

    function newVideo(Request $request)
    {
        $user = Auth::guard('users')->user();

        return view('admin.videos.create', compact('user'));

    }

    public function savevideo(Request $request){

        try {

            $user = Auth::guard('users')->user();$user = Auth::guard('users')->user();

            DB::table('videos')->insert([
                'v_title'=> $request->title,
                'v_link'=> $request->link,
                'created_at'=>Now(),
                'updated_at'=>Now()
            ]);

            $videos = DB::table('videos')->get();

            return view('admin.videos.table', compact('videos','user'));
       } catch (\Exception $e) {
        if (config('app.debug')) {
            $level = 'error';
                $message = "BackOffice Error Videos: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
               return back();
           }
           $level = 'error';
                $message = "BackOffice Error Videos: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
           return back();
       }

    }

    public function videos(){
        try {

            $user = Auth::guard('users')->user();

            $videos = Video::all();

            return view('admin.videos.table',compact('videos', 'user'));

       } catch (\Exception $e) {
           if (config('app.debug')) {
            $level = 'error';
                $message = "BackOffice Error Videos: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
               return back();
           }
           $level = 'error';
                $message = "BackOffice Error Videos: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
           return back();
       }
    }

    public function deletevideo($id){
        try {

            $user = Auth::guard('users')->user();

            DB::table('videos')->where(['id'=>$id])->delete();
            $videos = DB::table('videos')->get();


            return view('admin.videos.table', compact('videos', 'user'));
       } catch (\Exception $e) {
           if (config('app.debug')) {
            $level = 'error';
                $message = "BackOffice Error Deleting: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
               return back();
           }
           $level = 'error';
                $message = "BackOffice Error Deleting video: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
           return back();
       }
    }
}
