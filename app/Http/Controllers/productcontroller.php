<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Mail;

class productcontroller extends Controller
{
    public function index()
    {
                   
                      return view('homepage');   
                      // this is seeder db where it will fetch the data

             
    }

    public function shop()
    {
      $data=product::all();
        return view ('shop',['products'=>$data]); // php artisan DB:seed --class=Productseeder
    
    }

    public function detail($id)
    {


     $data=product::find($id);
     return view ('detail',['product'=>$data]);

    }

    public function addToCart(Request $req)
    {
      if($req->session()->has('user'))
      {

         $cart=new Cart;
         $cart->user_email=$req->session()->get('user')['email'];
         $cart->product_id=$req->product_id;
         $cart->save();
         return redirect('/shop');
      }
      else
      {
        return redirect('/welcome');
      }
    }

    static function cartitem()
    {
      
      $userid=Session::get('user')['email'];
      return Cart::where('user_email',$userid)->count();


    }

    function cartlist()
    {
      $userid=Session::get('user')['email'];
      $data= DB::table('cart')
      ->join('products','cart.product_id','products.id')
      ->select('products.*','cart.id as cart_id')
      ->where('cart.user_email',$userid)
      ->get();

      return view ('/cartlist',['products'=>$data]);
    }

    function removeproduct($id)
    {
       Cart::destroy($id);
      return redirect('/cartlist');

    }
    function orderNow()
    {
      $userid=Session::get('user')['email'];
      $totals= DB::table('cart')
      ->join('products','cart.product_id','products.id')
      ->where('cart.user_email',$userid)
      ->sum('products.price');

      $tax=(($totals/100)*18);
 $finaltotal=$totals+$tax+40;
 $finaltotal=($finaltotal-($finaltotal/100)*10);

 
 $data = [
  'finaltotal' => $finaltotal, 
];


 $userHeading= "Greetings You have been successfully created new account with madhuram.com we will love to serve you our wonderfull products  ";
 $user['to'] = $userid;                    //variable $USER
Mail::send('confirmorderemail' , $data, function($message) use ($user, $userHeading) {
$message->to($user['to']);
$message->subject($userHeading);
 });

 
 
      

      return view ('ordernow',['totals'=>$totals,'finaltotal'=>$finaltotal,'tax'=>$tax]);


    }  
    function orderplace(Request $ansh)
    {
      $userid=Session::get('user')['email'];
      $allCart=Cart::where('user_email',$userid)->get();
      foreach($allCart as $cart)
      {
        $order= new Order;
        $order->product_id=$cart['product_id'];
        $order->user_email=$cart['user_email'];
        $order->address=$ansh->address;
        $order->status="pending";
        $order->paymentstatus="pending";
        $order->save();

      }

      Cart::where('user_email',$userid)->delete();
       return redirect('/homepage');

    }
  public function orderlist()
  {

    $userid=Session::get('user')['email'];
    $orders= DB::table('orders')
    ->join('products','orders.product_id','products.id')
    ->where('orders.user_email',$userid)
    ->get();

    return view ('orderlist',['orders'=>$orders]);


  }
  
  }
