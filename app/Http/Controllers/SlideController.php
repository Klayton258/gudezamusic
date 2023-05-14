<?php

namespace App\Http\Controllers;

use App\Models\HomeSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use function PHPUnit\Framework\isEmpty;

class SlideController extends Controller
{

    private $slide;

    public function __construct(HomeSlide $slide)
    {
        $this->slide = $slide;
    }

    public function index(){

        try {

            $slides = DB::table('home_slides')->orderByDesc('id')->get();

            return view('admin.slides.table',['slides'=>$slides,'user'=>Auth::guard('users')->user()]);

       } catch (\Exception $e) {
           if (config('app.debug')) {


           }

       }

    }

    function uploadslide()
    {

        return view('admin.slides.uploadslide',['user'=>Auth::guard('users')->user()]);
    }

    public function saveslide(Request  $request){

        try {

            $size=20;
            $image = $request->file('slide_cover');
            $imageName =time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image);

            $img = Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();
            // });

            $img->stream();
            // $img->save(public_path("images/slide_covers/".$imageName),$size);
            Storage::disk('local')->put("public/images/slide_covers/$imageName",$img , 'public');


            $insert = DB::table('home_slides')->insert([
                'slide_title'=> $request->slide_title,
                'description'=> !isEmpty($request->description) ? "" : $request->description,
                'slide_cover'=> $imageName,
                'link_direct'=> !isEmpty($request->link_direct) ? "" : $request->link_direct,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);

            dd();

            return back()->with('success', 'Novo Slide adicionado com sucesso.');

        } catch (\Exception $e) {
            if (config('app.debug')) {
                $level = 'error';
                     $message = "BackOffice Error Slides: ";
                     $data = $e->getMessage();
                     Log::channel('main')->$level($message." \n [".$data."] \n");

            }
            $level = 'error';
                 $message = "BackOffice Error Slides: ";
                 $data = $e->getMessage();
                 Log::channel('main')->$level($message." \n [".$data."] \n");


        }

    }
    public function updateslide($id){

        try {

           $slide = DB::table('home_slides')->find($id);


            return view('admin.slides.update',['slide'=>$slide,'user'=>Auth::guard('users')->user()]);

       } catch (\Exception $e) {
           if (config('app.debug')) {

           }

       }

    }

    public function slideupdate($id, Request $request){

        try {

            if($request->hasFile('slide_cover')){

            $image = $request->file('slide_cover');
            $imageName =time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image);

            $img = Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();
            // });

            $img->stream();
            // $img->save(public_path("images/slide_covers/".$imageName),$size);
            Storage::disk('local')->put("public/images/slide_covers/$imageName",$img , 'public');

                $music =  DB::table('home_slides')->where(['id'=>$id])->update([
                    'slide_title'=> $request->slide_title,
                    'description'=> !isEmpty($request->description) ? "" : $request->description,
                    'slide_cover'=> $imageName,
                    'link_direct'=> !isEmpty($request->link_direct) ? "" : $request->link_direct,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }else{

                $slide = DB::table('home_slides')->where(['id'=>$id])->update([
                    'slide_title'=> $request->slide_title,
                    'description'=> !isEmpty($request->description) ? "" : $request->description,
                    'link_direct'=> !isEmpty($request->link_direct) ? "" : $request->link_direct
                ]);

            }

            return redirect(route('slideindex'))->with('success', 'Slide #'.$id.' Atualizado com sucesso.');

       } catch (\Exception $e) {
           if (config('app.debug')) {

           }

       }

    }

    public function deleteslide($id){

        try {

            // $music = DB::table('home_slides')->where(['id'=>$id])->delete();
            $this->slide->find($id)->delete();

            return redirect(route('slideindex'))->with('deleted', 'Slide #'.$id.' Apagado com sucesso.');

       } catch (\Exception $e) {
           if (config('app.debug')) {

           }

        }

    }
}
