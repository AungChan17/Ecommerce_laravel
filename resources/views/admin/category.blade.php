<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color
        {
            color: black;
        }
        .center 
        {
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 30px;
          border: 3px solid white;
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

          @if(session()->has('message'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="https://cdn-icons-png.flaticon.com/512/59/59836.png"/> </button>
            </div>


          @endif

            <div class="div_center">
                <h2 class="h2_font">Add Category</h2>

                <form action="{{url('/add_category')}}" method="POST">
                    @csrf
                    <input class="input_color" type="text" name="category" placeholder="Write category name"/>

                    <input type="submit" name="submit" class="btn btn-primary" value="Add Category"/>
                </form>

            </div>

            <table class="center">
              <tr>
                <td>Category Name</td>
                <td>Action</td>
              </tr>

              @foreach($data as $data)
              <tr>
                <td>{{$data->category_name}}</td>
                <td>
                  <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
                </td>
              </tr>

              @endforeach


            </table>

          </div>

      </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>