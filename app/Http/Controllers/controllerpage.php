<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crypt;
use Illuminate\Support\Facades\Hash;
use App\Models\Modelpage;
use App\Models\User;
// use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Mail;

class controllerpage extends Controller
{
    public function login()
    {

        return view('welcome');
    }

    public function createAccount()
    {

        return view('createAccount');
    }
    

    public function feedback()
    {

        return view ('feedback');

    }

    public function csubmit(Request $req)
    {

        // $req->validate([


        //     'email'=>'required',
        //     'password'=>'required',
        //     'mobile'=>'required',
        //     'Address'=>'required',
        //     'pincode'=>'required'
             
        //  ]);

         $registerpage=new Modelpage;
         $registerpage->email=$req['email'];
         $registerpage->mobile=$req['mobile'];
         $registerpage->Address=$req['Address'];
         $registerpage->pincode=$req['pincode'];
         $registerpage->password=Hash::make($req['password']);
         $registerpage->save();





         $data = [
            'email' => $req['email'], 
        ];


       
        $userHeading= "Greetings You have been successfully created new account with madhuram.com we will love to serve you our wonderfull products  ";
        $user['to'] = $req['email'];                    //variable $USER
       Mail::send('thankyoumessage' , $data, function($message) use ($user, $userHeading) {
       $message->to($user['to']);
       $message->subject($userHeading);
        });

        $userHeading= "Hello user hope you find website easy to use if anything issue with the site please rreport in feedback section in site";
        $user['to'] = $req['email'];                    //variable $USER
       Mail::send('thankyoumessage2' , $data, function($message) use ($user, $userHeading) {
       $message->to($user['to']);
       $message->subject($userHeading);
        });
      
        return redirect('/');

    }


    public function submit(Request $req)
    {
        // echo"<pre>";
        // print_r($req->all());

        // $req->validate([


        //     'email'=>'required',
        //     'password'=>'required'
             
        //  ]);



        // $registerpage=new Modelpage;
        // $registerpage->email=$req['email'];
        // $registerpage->password=Hash::make($req['password']);
        // $registerpage->save();


        // // $data = [
        // //     'names' => $req['name'],
        // //     'password' => $req['password'],
            
        // // ];




        // return view('/welcome');

//



     $user= Modelpage::where(['email'=>$req->email])->first();     //if email in database match it will login to device 
     
     if(!$user || !Hash::check($req->password,$user->password))
     {
         return 'something went wrong please try again';
     }
     else{
         
         $req->session()->put('user',$user);
         return redirect('/homepage');
     }
   
   
     //  return view('/');

}


}
