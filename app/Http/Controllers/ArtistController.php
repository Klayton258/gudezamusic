<?php

namespace App\Http\Controllers;

use App\API\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ArtistController extends Controller
{



    function saveartist(Request $request){

        try {
            $size=20;
            $image = $request->file('artist_image');
            $imageName =time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image);
            $img->save(public_path('\images\artist_image'.'\/'.$imageName),$size);

            $artist=  DB::table('artists')->insert([
                'artist_name'=> $request->artist_name,
                'artist_image'=> $imageName,
                'artist_bio'=> $request->artist_bio,
                'artist_facebook'=> $request->artist_facebook,
                'artist_instagram'=>  $request->artist_instagram,
                'artist_twitter'=> $request->artist_twitter,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);

            return response()->json(ApiResponse::responseMessage('sucess', 200), 200);
        } catch (\Exception $e) {
            if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }
}
