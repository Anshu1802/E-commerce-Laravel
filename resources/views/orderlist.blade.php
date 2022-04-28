<!DOCTYPE html>
<html lang="en">
<head>
    
        <style>
      * {box-sizing: border-box;}
      
      body { 
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
      
      .header {
        overflow: hidden;
        background-color: #f1f1f1;
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
      



.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: rgb(255, 255, 255);
}

.horizontal-center {
  margin: 0;
  position: absolute;
  right: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

div {
  margin-bottom: 15px;
  padding: 4px 12px;
}

.danger {
  background-color: #ffdddd;
  border-left: 6px solid #f44336;
}

.success {
  background-color: #ddffdd;
  border-left: 6px solid #04AA6D;
}

.info {
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
}


.warning {
  background-color: #ffffcc;
  border-left: 6px solid #ffeb3b;
}



        </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
      <a href="{{ url('/orderlist') }}">MyOrders</a>
      <a href="{{ url('/cartlist') }}">Cart <b>({{ $total }})</b></a>
  
    </div>
  </div>
    
<div class="danger">
  <p><strong>Order</strong> Once Ordered Cannot be Remove</p>
</div>

   
    <div class="success">
        <p><strong>Ordered Successfully!</strong> your order will be delivered soon..</p>
      </div>

    <table   align="center">
        
        <tr>
            <th>Product</th>
            <th>Delivery</th>
            <th>Address</th>
            {{-- <th>Catagory</th> --}}
            {{-- <th>Discription</th> --}}
            {{-- <th>Not Intrested</th> --}}
            {{-- <th>Purchase</th> --}}
        </tr>
        @foreach ($orders as $item)
        <tr>
            <td><img src="{{ $item->gallery }}"  alt="" border=3 height=200 width=200/><br /></td>
            <td align="center" height=300 width=300>{{ $item->status }}</td>
            <td align="center" height=300 width=300>{{ $item->address }}</td>
    
   
        </tr>
        @endforeach ()
    </table>
    





</body>  
</html>   