<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Required meta tags -->

    <base href="/public">

    @include('admin.css')

    <style class="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .font_size
        {
            font-size: 40px;;
            padding-bottom: 40px;
        }
        .text_color
        {
            color: black;
            padding-bottom:20px ;
        }
        label 
        {
            display: inline-block;
            width: 200px;
        }
        .div_design
        {
            padding-bottom: 15px;
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
                    <h1 class="font_size">Update Products</h1>

                    <form action="{{ url('/update_product_confirm',$product->id) }}" method="POST" enctype="multipart/form-data" >
                    @csrf

                        <div class="div_design">
                            <label>Product Title:</label>
                            <input class="text_color" type="text" name="title" placeholder="Write a title" required="" value="{{$product->title}}" />
                        </div>

                        <div class="div_design">
                            <label>Product Description:</label>
                            <input class="text_color" type="text" name="description" placeholder="Write a description" required="" value="{{$product->description}}" />
                        </div>

                        <div class="div_design">
                            <label>Product Price:</label>
                            <input class="text_color" type="text" name="price" placeholder="Write a price" required="" value="{{$product->price}}" />
                        </div>

                        <div class="div_design">
                            <label>Discount Price:</label>
                            <input class="text_color" type="number" name="dis_price" placeholder="Write a discount price" value="{{$product->discount_price}}" />
                        </div>

                        <div class="div_design">
                            <label>Product Quantity:</label>
                            <input class="text_color" type="number" name="quantity" min="0" placeholder="Write a quantity" required="" value="{{$product->quantity}}" />
                        </div>

                        <div class="div_design">
                            <label>Product Category:</label>
                            <select  class="text_color" name="category" required="">
                                <option value="{{$product->category}}" selected="">{{$product->category}}</option>

                                @foreach($category as $category)

                                <option value="{{$category->category_name}}">
                                    {{$category->category_name}}
                                </option>

                                @endforeach

                            </select>
                        </div>

                        <div class="div_design">
                            <label>Current Product Image :</label>
                            
                            <img class="rounded mx-auto d-block" height="100" width="100" src="/product/{{$product->image}}"/>
                        </div>



                        <div class="div_design">
                            <label>Change Product Image :</label>
                            
                            <input type="file" name="image" />
                        </div>

                        <div class="div_design">
                            
                            <input type="submit" name="submit" value="Update Product" class="btn btn-primary" />
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>