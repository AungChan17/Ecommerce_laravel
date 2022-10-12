<!-- product section -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
            
            @foreach($product as $products)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                           Product Details
                           </a>

                           <form action="{{url('add_cart',$products->id)}}" method="POST">
                              @csrf

                              <div class="row">

                                 <div class="col-md-3">
                                    <input type="number" name="quantity" value="1" min="1" />
                                 </div>

                                 <div class="col-md-4">
                                    <input type="submit" value="Add To Cart"/>
                                 </div>

                              </div>

                           </form>

                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>
                        @if($products->discount_price!=null)

                        <h5 class="text-primary">
                           Discount Price
                           <br>
                           ${{$products->discount_price}}
                        </h5>

                        <h6 class="text-decoration-line-through text-primary">
                           Price
                           <br>
                           ${{$products->price}}
                        </h6>

                        @else

                        <h6 class="text-primary">
                           Price
                           <br>
                           ${{$products->price}}
                        </h6>

                        @endif


                     </div>
                  </div>
               </div>
            
            @endforeach

            <!-- {{!!$product->appends(Request::all())->links()!!}} -->
            <span class="pt-3">
            {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
            </span>
            
            </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->