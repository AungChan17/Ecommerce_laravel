<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        lable
        {
            display: inline-block;
            width: 200px;
            font-size: 15px;
            font-weight: bold;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
      <!-- page-body-wrapper ends -->

      <div class="main-panel">
            <div class="content-wrapper">

                <h1 class="text-center" >Send Email to {{$order->email}}</h1>

                <form action="{{url('send_user_email',$order->id)}}" method="POST">
                    @csrf

                    <div class="mt-3">
                        <lable>Email Greeting :</lable>
                        <input class="text-dark"  type="text" name="greeting">
                    </div>

                    <div class="mt-3">
                        <lable>Email FirstLine :</lable>
                        <input class="text-dark" type="text" name="firstline">
                    </div>

                    <div class="mt-3">
                        <lable>Email Body :</lable>
                        <input class="text-dark" type="text" name="body">
                    </div>

                    <div class="mt-3">
                        <lable>Email Button name :</lable>
                        <input class="text-dark" type="text" name="button">
                    </div>

                    <div class="mt-3">
                        <lable>Email Url :</lable>
                        <input class="text-dark" class="text-dark" type="text" name="url">
                    </div>

                    <div class="mt-3">
                        <lable>Email Last Line :</lable>
                        <input class="text-dark" type="text" name="lastline">
                    </div>

                    <div class="mt-3">
                        <input type="submit" value="send Email"  class="btn btn-outline-primary">
                    </div>

                </form>


            </div>



      </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>