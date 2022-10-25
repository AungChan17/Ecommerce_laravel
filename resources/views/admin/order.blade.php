<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')

        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="text-white h1 text-center" >All Orders</h1>

                <div class="mb-3" style="padding-left: 400px; padding-bottom:30px;" >

                  <form action="{{url('search')}}" method="GET" >

                    @csrf

                    <input type="text" name="search" placeholder="Search For Something">

                    <input type="submit" value="Search" class="btn btn-outline-primary">

                  </form>

                </div>

                <table class="table table-dark table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                        <th>Delivered</th>
                        <th>Print PDF</th>
                        <th>Send Email</th>
                    </tr>

                @forelse($order as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img  src="/product/{{$order->image}}"/>
                        </td>

                        <td>

                        @if($order->delivery_status='processing')

                          <a href="{{url('delivered',$order->id)}}"
                          onclick="return confirm('Are you sure this product is delivered!!!')" class="btn btn-outline-primary">Delivered</a>

                        @else

                          <p>Delivered</p>

                        @endif

                        </td>

                        <td>
                          <a href="{{url('print_pdf',$order->id)}}" class="btn btn-outline-secondary">Print PDF</a>
                        </td>

                        <td>
                          <a href="{{url('send_email',$order->id)}}" class="btn btn-outline-info">Send Email</a>
                        </td>

                    </tr>

                    @empty

                    <tr>
                      <td  colspan="16" class="text-white" > 
                        No Data Found
                      </td>
                    </tr>


                @endforelse

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