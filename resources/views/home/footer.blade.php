 <!-- footer start -->
 <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <img width="150" src="images/love.png" alt="#" /><span style="font-size:larger; " >Thanks For Buying</span>
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS:</strong> Insein Township , Yangon</p>
                        <p><strong>TELEPHONE:</strong> +95 9781661374</p>
                        <p><strong>EMAIL:</strong> chanmyae1792003@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="{{url('/')}}">Home</a></li>
                           <li><a href="{{url('product_page')}}">Products</a></li>
                           <li><a href="{{url('about_page')}}">About</a></li>
                           <li><a href="{{url('contact_page')}}">Contact</a></li>
                           <li><a href="{{url('show_cart')}}">Cart</a></li>
                           <li><a href="{{url('show_order')}}">Order</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <li><a href="#">Account</a></li>
                           <li><a href="{{ route('login') }}">Login</a></li>
                           <li><a href="{{ route('register') }}">Register</a></li>
                           <li><a href="#">Shopping</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->