<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style class="text/css" >
        .img_size
        {
            height: 100px;
            width: 100px;
        }
      </style>

   </head>
   <body>

      <div class="hero_area">
        @include('home.header')

        @if(session()->has('message'))

          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session()->get('message')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="https://cdn-icons-png.flaticon.com/512/59/59836.png"/> </button>
          </div>

        @endif

      <div class="container mt-3">
        <table class="table">

            <tr>
                <th>Product title</th>
                <th>Product quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            <?php $totalprice=0; ?>

            @foreach($cart as $cart)

            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>{{$cart->price}}</td>
                <td><img class="img_size" src="/product/{{$cart->image}}"> </td>
                <td>
                    <a class="btn btn-outline-danger" onclick="return confirm('Are you sure to remove this?')" href="{{url('remove_cart',$cart->id)}}">Remove Product</a> 
                </td>

            </tr>

            <?php $totalprice=$totalprice + $cart->price ?>

            @endforeach

        </table>

        <div>
            <h1 class="fw-bold text-end fs-1 mr-4 mt-3 mb-3">Total Price : ${{$totalprice}} </h1>
        </div>

        <div class="mb-3 text-end" >
          <h1 class="mb-2">Proceed to Order</h1>

          <a class="btn btn-outline-primary" href="{{url('cash_order')}}">Cash On Delivery</a>

          <a class="btn btn-outline-primary" href="{{url('stripe',$totalprice)}}">Pay Using Card</a>

        </div>

      </div>
     
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="#">Aung Chan</a><br>
         
            Distributed By <a href="#" target="_blank">ACM</a>
         
         </p>
      </div>


      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>




</html>