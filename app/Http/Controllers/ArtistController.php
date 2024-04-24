<?php

namespace App\Http\Controllers;

use App\API\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use function PHPUnit\Framework\isEmpty;

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

    function index()
    {
        $user = Auth::guard('users')->user();
        $artists = Artist::all();
        return view('admin.artist.table', compact('artists', 'user'));
    }

    function uploadartist()
    {
        return view('admin.artist.create', ['user'=>Auth::guard('users')->user()]);
    }

    function createartist(Request $request){

        try {

            $image = $request->file('artist_image');
            $imageName =time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image);
            $img = Image::make($image->getRealPath());
            $img->stream();
            Storage::disk('local')->put("public/images/artist_image/$imageName",$img , 'public');
            $artist=  DB::table('artists')->insert([
                'artist_name'=> $request->artist_name,
                'artist_image'=> $imageName,
                'artist_bio'=> $request->artist_bio,
                'artist_facebook'=> $request->artist_facebook==null ? "#" : $request->artist_facebook,
                'artist_instagram'=> $request->artist_instagram==null ? "#" : $request->artist_instagram,
                'artist_twitter'=> $request->artist_twitter==null ? "#" : $request->artist_twitter,
                'musics'=> $request->musics,
                'videos'=> $request->videos,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);

            return back()->with('success', "Artist created successfully");
        } catch (\Exception $e) {
            die($e->getMessage());
       }

    }

    public function updateindex($id)
    {
        $user = Auth::guard('users')->user();
        $artist = Artist::find($id);
        return view('admin.artist.update', compact('artist', 'user'));
    }

    public function updateartist(Request $request){

        try {
            $id = $request->id;
            if($request->hasFile('artist_image')){

            $image = $request->file('artist_image');
            $imageName =time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image);

            $img = Image::make($image->getRealPath());

            $img->stream();
            Storage::disk('local')->put("public/images/artist_image/$imageName",$img , 'public');

                $artist =  DB::table('artists')->where(['id'=>$id])->update([
                    'artist_name'=> $request->artist_name,
                    'artist_image'=> $imageName,
                    'artist_bio'=> $request->artist_bio,
                    'artist_facebook'=> $request->artist_facebook=="" ? "#" : $request->artist_facebook,
                    'artist_instagram'=> $request->artist_instagram=="" ? "#" : $request->artist_instagram,
                    'artist_twitter'=> $request->artist_twitter=="" ? "#" : $request->artist_twitter,
                    'musics'=> $request->musics,
                    'videos'=> $request->videos,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }else{
                $artist = DB::table('artists')->where('id',$id)->update([
                    'artist_name'=> $request->artist_name,
                    'artist_bio'=> $request->artist_bio,
                    'artist_facebook'=> $request->artist_facebook =="" ? "#" : $request->artist_facebook,
                    'artist_instagram'=> $request->artist_instagram=="" ? "#" : $request->artist_instagram,
                    'artist_twitter'=> $request->artist_twitter=="" ? "#" : $request->artist_twitter,
                    'musics'=> $request->musics,
                    'videos'=> $request->videos,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);

            }

            return redirect(route('artistindex'))->with('success', 'Artista #'.$id.' Atualizado com sucesso.');

       } catch (\Exception $e) {
           if (config('app.debug')) {

           }

       }

    }
}
