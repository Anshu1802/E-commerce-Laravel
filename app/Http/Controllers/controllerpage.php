<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crypt;
use Illuminate\Support\Facades\Hash;
use App\Models\Modelpage;
use App\Models\User;

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
