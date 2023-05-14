<?php

namespace App\Http\Controllers;

use App\API\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class EventsApiController extends Controller
{
    function index(){
        try{

            $events = DB::table('events')->get();

            return response()->json(ApiResponse::responseMessage('Success', 200, $events), 200);
        } catch (\Exception $e) {
            if (config('app.debug')) {
                return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
            }
            return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
        }
    }

    public function newEvent(Request $request){

        try {

            $size=20;
            $image = $request->file('image');
            $imageName =time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image);

            $img = Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();
            // });
            $img->stream();
            // $img->save(public_path("images/slide_covers/".$imageName),$size);
            Storage::disk('local')->put("public/images/events/$imageName",$img , 'public');

            $events = DB::table('events')->insert([
                'image'=> $imageName,
                'title'=> $request->title,
                'start_time'=>$request->start_time,
                'end_time'=> $request->end_time,
                'location'=> $request->location,
                'hasPrice'=> $request->hasPrice,
                'Price'=> $request->price,
                'total_people'=> $request->total_people,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);




            return response()->json(ApiResponse::responseMessage('Success', 200), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
            $level = 'error';
            $message = "BackOffice Error Event: ";
            $data = $e->getMessage();
            Log::channel('main')->$level($message." \n [".$data."] \n");

               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }
}
