<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use function PHPUnit\Framework\isEmpty;

class MusicController extends Controller
{
    public function index(){

        try {

            $songs = DB::table('musics')->orderByDesc('id')->get();


            return view('admin.musics.table',['musics'=> $songs, 'user'=>Auth::guard('users')->user()]);

       } catch (\Exception $e) {
           if (config('app.debug')) {
            dd($e);
        }

       }

    }

    function updatesong($id)
    {
            $music = DB::table('musics')->find($id);

        return view('admin.musics.update',['user'=>Auth::guard('users')->user(), 'music'=>$music]);
    }

    public function savemusic(Request $request){

        try {
            $size=20;
            $image = $request->file('m_cover');
            $imageName =time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image);
            $img->save(public_path('images/music_covers'.'/'.$imageName),$size);

            $musics = DB::table('musics')->insert([
                'm_cover'=> $imageName,
                'm_title'=> $request->m_title,
                'm_artist'=>$request->m_artist,
                'm_album'=> $request->m_album,
                'youtube'=> !isEmpty($request->youtube) ? NULL : $request->youtube,
                'audiomack'=> !isEmpty($request->audiomack) ? NULL : $request->audiomack,
                'spotify'=> !isEmpty($request->spotify) ? NULL : $request->spotify,
                'soundcloud'=> !isEmpty($request->soundcloud) ? NULL : $request->soundcloud,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);


            return back()->with('success', 'Nova Musica adicionada com sucesso.');

       } catch (\Exception $e) {
           if (config('app.debug')) {
                dd($e);
            }
            dd($e);

       }

    }

    public function musicbyid($id){

        try {

           $music = DB::table('musics')->where(['id'=>$id])->get();

       } catch (\Exception $e) {
           if (config('app.debug')) {

           }
       }

    }
    public function updatemusic($id, Request $request){

        try {

            if($request->hasFile('m_cover')){
                $size = 20;
                $image = $request->file('m_cover');
                $imageName =time().'.'.$image->getClientOriginalExtension();
                $img = Image::make($image);
                $img->save(public_path('\images\music_covers'.'\/'.$imageName),$size);

                $music = DB::table('musics')->where(['id'=>$id])->update([
                    'm_cover'=> $imageName,
                    'm_title'=> $request->m_title,
                    'm_artist'=>$request->m_artist,
                    'm_album'=> $request->m_album,
                    'youtube'=> !isEmpty($request->youtube) ? "" : $request->youtube,
                    'audiomack'=> !isEmpty($request->audiomack) ? "" : $request->audiomack,
                    'spotify'=> !isEmpty($request->spotify) ? "" : $request->spotify,
                    'soundcloud'=> !isEmpty($request->soundcloud) ? "" : $request->soundcloud,
                    'updated_at'=>now()
                ]);
            }else{

                $music = DB::table('musics')->where(['id'=>$id])->update([
                    'm_title'=> $request->m_title,
                    'm_artist'=>$request->m_artist,
                    'm_album'=> $request->m_album,
                    'youtube'=> !isEmpty($request->youtube) ? "" : $request->youtube,
                    'audiomack'=> !isEmpty($request->audiomack) ? "" : $request->audiomack,
                    'spotify'=> !isEmpty($request->spotify) ? "" : $request->spotify,
                    'soundcloud'=> !isEmpty($request->soundcloud) ? "" : $request->soundcloud,
                    'updated_at'=>now()
                ]);

            }


            return redirect(route('musicindex'))->with('success', 'Musica #'.$id.' atualizada com sucesso.');

        } catch (\Exception $e) {
           if (config('app.debug')) {

           }

       }

    }

    public function deletemusic($id){

        try {

            $music = DB::table('musics')->where(['id'=>$id])->delete();

            return redirect(route('musicindex'))->with('deleted', 'Musica #'.$id.' Apagada com sucesso.');

       } catch (\Exception $e) {
           if (config('app.debug')) {
               return $e;
           }

        }

    }
}
