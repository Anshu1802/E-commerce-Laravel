<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
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
        </style>
</head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

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


{{-- 
      @foreach ( $products as $item )
              
            
              
            
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $item['gallery'] }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $item['name'] }}</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">{{ $item['catageory'] }}</h2>
                <p class="mt-1">{{ $item['price'] }}</p>
              </div>
            </div>
            @endforeach () --}}


            {{-- <a href=""><img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('burger.png') }}"></a>
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Western</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Veg . Burger</h2>
                <p class="mt-1">Rs 60</p>
              </div>
            </div> --}}







    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">


            @foreach ( $products as $item )
              
            
              
            
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden" href="detail/{{ $item['id'] }}">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $item['gallery'] }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $item['name'] }}</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">{{ $item['catageory'] }}</h2>
                <p class="mt-1">{{ $item['price'] }}</p>
              </div>
            </div>
            @endforeach ()

{{-- <a href="detail/{{ $item['id'] }}"> --}}


          
            {{-- <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block"  src="{{ asset('samosa.png') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Famous</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Samosa Pav</h2>
                <p class="mt-1">Rs 17</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block"  src="{{ asset('jalebi.png') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Sweets</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Jalebi </h2>
                <p class="mt-1">Rs 200 (kg)</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block"  src="{{ asset('hotdog.png') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">France spl</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Hotdog</h2>
                <p class="mt-1">Rs 60</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('pizza.png') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Italian</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Cheese burst</h2>
                <p class="mt-1">Rs 399</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('shake.png') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Drinks</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Shakes & Refreshments</h2>
                <p class="mt-1">Starting at just Rs 20/-</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('momo.png') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Nepal</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Momo</h2>
                <p class="mt-1">Rs 99</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('noodle.png') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Japanese</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Noodles</h2>
                <p class="mt-1">Rs 110</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block"  src="{{ asset('burger.png') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">America</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">burger </h2>
                <p class="mt-1">Rs 45 </p>
              </div>
            </div> --}}
          </div>
        </div>
      </section>



</body>
</html>