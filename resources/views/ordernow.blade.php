
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
* {box-sizing: border-box;}
      
      body { 
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
      
      .header {
        overflow: hidden;
        background-color: #ffffff;
        padding: 20px 10px;
      }
      
      .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px; 
        line-height: 25px;
        border-radius: 4px;
      }
      
      .header a.logo {
        font-size: 25px;
        font-weight: bold;
      }
      
      .header a:hover {
        background-color: #ddd;
        color: black;
      }
      
      .header a.active {
        background-color: dodgerblue;
        color: white;
      }
      
      .header-right {
        float: right;
      }
      
      @media screen and (max-width: 500px) {
        .header a {
          float: none;
          display: block;
          text-align: left;
        }
        
        .header-right {
          float: none;
        }
      }

      .button {
  background-color: rgb(30, 144, 255);
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  right: 50%;
  
}


</style>
</head>
<body>


    <?php   
    use App\Http\Controllers\productcontroller; 
    
       if (Session::has('user')) 
       {
        $total=productcontroller::cartitem();
       }
    ?>
    <div class="header">
      <a href="{{ url('/logout') }}" class="logo">Logout</a>
      <div class="header-right">
        <a  href="{{ url('/homepage') }}">Home</a>
        <a class="active" href="{{ url('/shop') }}">Shop</a>
        <a href="{{ url('/feedback') }}">Feedback</a>
        <a href="{{ url('/cartlist') }}">Cart <b>({{ $total }})</b></a>
    
      </div>
    </div>








<form method="POST" action="orderplace">
  @csrf
  
<div class="row">
  <div class="col-75">

  <div class="col-25">
    <div class="container">
        <h4 align="center">Bill Amount</h4>
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>{{ $total }}</b></span></h4>
      <p>Product (All in cart) <span class="price">₹ {{ $totals }}</span></p>
      <p>Tax (incl GST) <span class="price">₹ {{ $tax }}</span></p>
      <p>Delivery <span class="price">₹40</span></p>
      <p>Insurance (incl) <span class="price">₹ 0</span></p>     
      
      <hr>
      <p>Sub-Total <span class="price" style="color:black"> ₹ {{ $subtotal=$totals+$tax+40 }}</span></p>
      <p>Discount 10%<span class="price">₹{{ $dis=($subtotal/100)*10 }}</span></p>
      <b><p>Final Amount<span class="price"><b>₹ {{ $finaltotal}}</b></span></p></b>
    </div>
  </div>
  
  </div>
</div><br>


<div class="form-group">
  <h3><B><label for="exampleFormControlTextarea1"  >DELIVERY ADDRESS</label></B></h3>
  <textarea class="form-control" name="address" rows="5" cols="77" placeholder="Enter full  delivery address..." required></textarea>
</div><br>
      
<button class="button" type="submit" value="submit">Confirm Buying</button>


 
    </form>
</body>
</html>