<?php

namespace App\Http\Controllers;

use App\API\ApiResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\PersonalAccessToken;
use Intervention\Image\Facades\Image;

use function PHPUnit\Framework\isEmpty;

class DashController extends Controller
{


    public function index(){

        try {

            $slides = DB::table('home_slides')->get();

            return response()->json(ApiResponse::responseMessage('sucess', 200, $slides), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {

               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }
    public function slides(){

        try {

            $slides = DB::table('home_slides')->get();

            return response()->json(ApiResponse::responseMessage('sucess', 200, $slides), 200);

       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
            }
            return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
        }

    }

    public function homeslide(Request  $request){

        try {
            // $this->validate($request, [
                //         'slide_cover'=> 'required|image|mimes:png,jpg,jpeg|max:2048'
            // ]);
            $size=20;
            $image = $request->file('slide_cover');
            $imageName =time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image);
            $img->save(public_path('\images\slide_covers'.'\/'.$imageName),$size);


            $insert = DB::table('home_slides')->insert([
                'slide_title'=> $request->slide_title,
                'description'=> !isEmpty($request->description) ? "" : $request->description,
                'slide_cover'=> $imageName,
                'link_direct'=> !isEmpty($request->link_direct) ? "" : $request->link_direct,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);

            return response()->json(ApiResponse::responseMessage('Updeated with sucess', 200), 200);

        } catch (\Exception $e) {
            if (config('app.debug')) {
                $level = 'error';
                     $message = "BackOffice Error Slides: ";
                     $data = $e->getMessage();
                     Log::channel('main')->$level($message." \n [".$data."] \n");
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
            }
            $level = 'error';
                 $message = "BackOffice Error Slides: ";
                 $data = $e->getMessage();
                 Log::channel('main')->$level($message." \n [".$data."] \n");

            return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
        }

    }
    public function slidebyid($id){

        try {

           $slide = DB::table('home_slides')->where(['id'=>$id])->get();


           return response()->json(ApiResponse::responseMessage('Request slide with success', 200, $slide), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }

    public function updateslide($id, Request $request){

        try {

            if($request->hasFile('slide_cover')){

                $image = $request->file('slide_cover');
                $imageName =time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('/images/slide_covers'),$imageName);

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


           return response()->json(ApiResponse::responseMessage('Upadet slide with success', 200), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }

    public function slidedelete($id){

        try {

            $music = DB::table('home_slides')->where(['id'=>$id])->delete();


            return response()->json(ApiResponse::responseMessage('Slide deleted with success', 200), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
        }

    }
// =======================================================================================================================
//                                                 SLIDE METHODS END
// =======================================================================================================================


// =======================================================================================================================
//                                                 MUSIC METHODS
// =======================================================================================================================

    public function allsongs(){

        try {

            $songs = DB::table('musics')->get();

            return response()->json(ApiResponse::responseMessage('Success', 200,$songs), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }

    public function savemusic(Request $request){

        try {
            $size=20;
            $image = $request->file('m_cover');
            $imageName =time().'.'.$image->getClientOriginalExtension();
            $img = Image::make($image);
            $img->save(public_path('\images\music_covers'.'\/'.$imageName),$size);

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




            return response()->json(ApiResponse::responseMessage('Success', 200), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }

    public function musicbyid($id){

        try {

           $music = DB::table('musics')->where(['id'=>$id])->get();


           return response()->json(ApiResponse::responseMessage('Request music with success', 200, $music), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
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


            return response()->json(ApiResponse::responseMessage('Upadet music with success', 200), 200);
        } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }

    public function musicdelete($id){

        try {

            $music = DB::table('musics')->where(['id'=>$id])->delete();


            return response()->json(ApiResponse::responseMessage('Music deleted with success', 200), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
        }

    }

// =======================================================================================================================
//                                                 MUSIC METHODS END
// =======================================================================================================================

    public function savevideo(Request $request){

        try {

            DB::table('videos')->insert([
                'v_title'=> $request->title,
                'v_link'=> $request->link,
                'created_at'=>Now(),
                'updated_at'=>Now()
            ]);


            return response()->json(ApiResponse::responseMessage('Video uploaded', 200), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }

    public function videos(){
        try {

            $videos = DB::table('videos')->get();


            return response()->json(ApiResponse::responseMessage('', 201, $videos), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
            $level = 'error';
                $message = "BackOffice Error Videos: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           $level = 'error';
                $message = "BackOffice Error Videos: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }
    }

    public function deletevideo($id){
        try {

            $videos = DB::table('videos')->where(['id'=>$id])->delete();


            return response()->json(ApiResponse::responseMessage('video deleted', 404), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
            $level = 'error';
                $message = "BackOffice Error Deleting: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           $level = 'error';
                $message = "BackOffice Error Deleting video: ";
                $data = $e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }
    }
// ==============================================================================================================================
//                                                 ARTIST METHODS
// ==============================================================================================================================
    public function saveartist(Request $request){

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

    public function updateartist($id, Request $request){

        try {

            if($request->hasFile('artist_image')){

                $size=20;
                $image = $request->file('artist_image');
                $imageName =time().'.'.$image->getClientOriginalExtension();
                $img = Image::make($image);
                $img->save(public_path('\images\artist_image'.'\/'.$imageName),$size);

                $music = DB::table('artists')->where(['id'=>$id])->update([
                'artist_name'=> $request->artist_name,
                'artist_image'=> $imageName,
                'artist_bio'=> $request->artist_bio,
                'artist_facebook'=> !isEmpty($request->artist_facebook) ? "" : $request->artist_facebook,
                'artist_instagram'=>  !isEmpty($request->artist_instagram) ? "" : $request->artist_instagram,
                'artist_twitter'=> !isEmpty($request->artist_twitter) ? "" : $request->artist_twitter,
                'updated_at'=>now()
                ]);
            }else{

                $artist = DB::table('artists')->where(['id'=>$id])->update([
                'artist_name'=> $request->artist_name,
                'artist_bio'=> $request->artist_bio,
                'artist_facebook'=> !isEmpty($request->artist_facebook) ? "" : $request->artist_facebook,
                'artist_instagram'=>  !isEmpty($request->artist_instagram) ? "" : $request->artist_instagram,
                'artist_twitter'=> !isEmpty($request->artist_twitter) ? "" : $request->artist_twitter,
                'updated_at'=>now()
                ]);

            }

            return response()->json(ApiResponse::responseMessage('sucess', 200), 200);
        } catch (\Exception $e) {
            if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }
    public function allartists(){

        try {

            $artists = DB::table('artists')->get();

           return response()->json(ApiResponse::responseMessage('success', 200,$artists), 200);
       } catch (\Exception $e) {
           if (config('app.debug')) {
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }

        public function artistbyid($id){

            try {

               $music = DB::table('artists')->where(['id'=>$id])->get();


               return response()->json(ApiResponse::responseMessage('Request music with success', 200, $music), 200);
           } catch (\Exception $e) {
               if (config('app.debug')) {
                   return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
               }
               return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
           }

        }

        public function artistdelete($id){

            try {

                $music = DB::table('artists')->where(['id'=>$id])->delete();


                return response()->json(ApiResponse::responseMessage('Artist deleted with success', 200), 200);
           } catch (\Exception $e) {
               if (config('app.debug')) {
                   return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
               }
               return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
            }

        }

// ==============================================================================================================================
//                                                 ARTIST METHODS END
// ==============================================================================================================================

    public function createuser(Request $request){

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

           return response()->json(ApiResponse::responseMessage('sucess', 200), 200);

       } catch (\Exception $e) {
           if (config('app.debug')) {
            $level = 'error';
                $message = "BackOffice Error Creating User: ";
                $data = " Name: ".$request->name."- User: "
                .$request->username." role- "
                .$request->role_id.' >>>>> '
                .$e->getMessage();

                Log::channel('main')->$level($message." [".$data."]");
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
            $level = 'error';
                $message = "BackOffice Error Creating User: ";
                $data = " Name: ".$request->name."- User: "
                .$request->username." role- "
                .$request->role_id.' >>>>> '
                .$e->getMessage();

                Log::channel('main')->$level($message." [".$data."]");
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }

    public function userlogin(Request $request){

        try {

            $user = User::where('username', $request->username)->first();

            $request->validate([
                    'username' => 'required',
                    'password' => 'required',
                    'device_name' => 'required',
                ]);

                // $user->notify(new EmailVerify());

                if (! $user || ! Hash::check($request->password, $user->password)) {
                    throw ValidationException::withMessages([
                        'email' => ['The provided credentials are incorrect.'],
                    ]);
                }



                $level = 'info';
                $message = "BackOffice Login: ";
                $data = "User: ".$request->username;
                Log::channel('main')->$level($message." [".$data."]");
                return $user->createToken($request->device_name)->plainTextToken;


       } catch (\Exception $e) {
           if (config('app.debug')) {
                $level = 'error';
                $message = "Error BackOffice Login: ";
                $data = "User: ".$request->username. " =>>> ".$e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");

               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
           }
           $level = 'error';
                $message = "Error BackOffice Login: ";
                $data = "User: ".$request->username. " =>>> ".$e->getMessage();
                Log::channel('main')->$level($message." [".$data."]");
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }
    public function userlogout(Request $request){

        try {
            PersonalAccessToken::findToken($request->bearerToken())->delete();

            return response()->json(ApiResponse::responseMessage('Logout', 200), 200);

       } catch (\Exception $e) {
           if (config('app.debug')) {
               Log::channel('main')->error('REQUEST: '. $request);
               return response()->json(ApiResponse::responseMessage($e->getMessage(), 1020), 500);
            }
            Log::channel('main')->error('REQUEST: '. $request);
           return response()->json(ApiResponse::responseMessage('An Error ocorreds', 1020), 500);
       }

    }
}
