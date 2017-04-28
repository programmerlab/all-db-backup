
  <!-- CONTENT   -->
  <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
    <!-- ======  SECTION – HERO   --> 
    <!-- ======  SECTION – HERO : END  ======= --> 
    
            <!--  === WIDE PRODUCTS =======  -->
    <div class="wide-banneRS wow fadeInUp outer-bottom-xs">
      <div class="row">
        <div class="col-md-7 col-sm-7">
          <div class="wide-banner cnt-strip">
            <div class="image"> <img class="img-responsive" src="{{ asset('public/enduser/assets/images/banners/home-banner1.jpg') }}" alt=""> </div>
          </div>
          <!-- /.wide-banner --> 
        </div>
        <!-- /.col -->
        <div class="col-md-5 col-sm-5">
          <div class="wide-banner cnt-strip">
            <div class="image"> <img class="img-responsive" src="{{ asset('public/enduser/assets/images/banners/home-banner2.jpg') }}" alt=""> </div>
          </div>
          <!-- /.wide-banner --> 
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.row --> 
    </div>
    <!-- /.wide-banneRS --> 
    
    <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
    <!-- ============================================== SCROLL TABS ============================================== -->
    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
      <div class="more-info-tab clearfix ">
        <h3 class="new-product-title pull-left">New Products</h3>

        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">

       

          <li class="active"><a data-transition-type="backSlide" href="##all" data-toggle="tab">All</a></li>
           @foreach($categories as $key => $value) 
            <li><a data-transition-type="backSlide" href="##{{$value['name']}}" data-toggle="tab">{{$value['name']}}</a></li> 
          @endforeach
        
        </ul>
        <!-- /.nav-tabs --> 
      </div>
      <div class="tab-content outer-top-xs">
       
        <div class="tab-pane in active" id="all">
          <div class="product-slider">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
             
            @foreach($categories as $key => $value) 
              @foreach($products as $key2 => $product)  
              @if($value['id']==$product->category->parent_id)  
                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="{{ url('product-details/'.$product->id) }}">
                          <img  src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt=""></a> 
                        </div>
                        <!-- /.image --> 
                        <div class="tag hot"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="{{ url('product-details/'.$product->id) }}">{{$product->product_title}}</a> </h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"> ({{ $product->views+100 }} views) </div>
                       <div class="product-price"> <span class="price"> RS {{$product->price-($product->price*$product->discount)/100}} </span> <span class="price-before-discount">RS {{$product->price}}</span>  </div>
                        <!-- /.product-price --> 
                        
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                             
                            <li class="lnk wishlist"> <a class="add-to-cart" href="{{ url('product-details/'.$product->id) }}" title="Show product details"> <i class="fa fa-shopping-cart"></i>  View Details </a> </li>
                            
                          </ul>
                        </div>
                        <!-- /.action --> 
                      </div>
                      <!-- /.cart --> 
                    </div>
                    <!-- /.product --> 
                    
                  </div>
                  <!-- /.products --> 
                </div>
              @endif
              @endforeach
            @endforeach
              <!-- /.item --> 
              <!-- /.item --> 


              <!-- /.item -->
              
              <!-- /.item --> 
            </div>
            <!-- /.home-owl-carousel --> 
          </div>
          <!-- /.product-slider --> 
        </div>
        <!-- /.tab-pane -->
      @foreach($categories as $key => $value)   
        <div class="tab-pane" id="{{$value['name']}}">
          <div class="product-slider">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
              

              @foreach($products as $key2 => $product)  
              @if($value['id']==$product->category->parent_id)  
                  <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="{{ url('product-details/'.$product->id) }}">
                          <img  src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt=""></a> 
                        </div>
                        <!-- /.image --> 
                        <div class="tag hot"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="{{ url('product-details/'.$product->id) }}">{{$product->product_title}}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description">({{ $product->views+100 }} views)</div>
                       <div class="product-price"> <span class="price"> RS {{$product->price-($product->price*$product->discount)/100}} </span> <span class="price-before-discount">RS {{$product->price}}</span> </div>
                        <!-- /.product-price --> 
                        
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                             
                            <li class="lnk wishlist"> <a class="add-to-cart" href="{{ url('product-details/'.$product->id) }}" title="Show product details"> <i class="fa fa-shopping-cart"></i>  View Details </a> </li>
                            
                          </ul>
                        </div>
                        <!-- /.action --> 
                      </div>
                      <!-- /.cart --> 
                    </div>
                    <!-- /.product --> 
                    
                  </div>
                  <!-- /.products --> 
                </div>
              @endif
              @endforeach 
              <!-- /.item --> 
              <!-- /.item --> 


              <!-- /.item --> 
            </div>
            <!-- /.home-owl-carousel --> 
          </div>
          <!-- /.product-slider --> 
        </div>
        <!-- /.tab-pane -->
      @endforeach
       
        <!-- /.tab-pane --> 
        
      </div>
      <!-- /.tab-content --> 
    </div>
    <!-- /.scroll-tabs --> 
    <!-- ============================================== SCROLL TABS : END ============================================== --> 

    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <section class="section featured-product wow fadeInUp">
      <h3 class="section-title">Herbal products</h3>
      <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
       
        <!-- /.item -->
          @foreach($categories as $key => $value)   
            @foreach($products as $key2 => $product)  
                @if($value['id']==$product->category->parent_id && str_contains($value['name'],'Herbal'))  
                  <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="{{ url('product-details/'.$product->id) }}">
                          <img  src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt=""></a> 
                        </div>
                        <!-- /.image --> 
                        <div class="tag hot"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="{{ url('product-details/'.$product->id) }}">{{$product->product_title}}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description">({{ $product->views+100 }} views)</div>
                       <div class="product-price"> <span class="price"> RS {{$product->price-($product->price*$product->discount)/100}} </span> <span class="price-before-discount">RS {{$product->price}}</span> </div>
                        <!-- /.product-price --> 
                        
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                             
                            <li class="lnk wishlist"> <a class="add-to-cart" href="{{ url('product-details/'.$product->id) }}" title="Show product details"> <i class="fa fa-shopping-cart"></i>  View Details </a> </li>
                            
                          </ul>
                        </div>
                        <!-- /.action --> 
                      </div>
                      <!-- /.cart --> 
                    </div>
                    <!-- /.product --> 
                    
                  </div>
                  <!-- /.products --> 
                </div>
              @endif
            @endforeach 
          @endforeach
        <!-- /.item --> 
        <!-- /.item --> 
      </div>
      <!-- /.home-owl-carousel --> 
    </section>
        <section class="section featured-product wow fadeInUp">
      <h3 class="section-title">Electronics products</h3>
      <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
       
        <!-- /.item -->
          @foreach($categories as $key => $value)   
            @foreach($products as $key2 => $product)  
                @if($value['id']==$product->category->parent_id && str_contains($value['name'],'Electronic'))  
                    <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="{{ url('product-details/'.$product->id) }}">
                          <img  src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt=""></a> 
                        </div>
                        <!-- /.image --> 
                        <div class="tag hot"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="{{ url('product-details/'.$product->id) }}">{{$product->product_title}}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description">({{ $product->views+100 }} views)</div>
                       <div class="product-price"> <span class="price"> RS {{$product->price-($product->price*$product->discount)/100}} </span> <span class="price-before-discount">RS {{$product->price}}</span> </div>
                        <!-- /.product-price --> 
                        
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                             
                            <li class="lnk wishlist"> <a class="add-to-cart" href="{{ url('product-details/'.$product->id) }}" title="Show product details"> <i class="fa fa-shopping-cart"></i>  View Details </a> </li>
                            
                          </ul>
                        </div>
                        <!-- /.action --> 
                      </div>
                      <!-- /.cart --> 
                    </div>
                    <!-- /.product --> 
                    
                  </div>
                  <!-- /.products --> 
                </div>
              @endif
            @endforeach 
          @endforeach
        <!-- /.item --> 
        <!-- /.item --> 
      </div>
      <!-- /.home-owl-carousel --> 
    </section>
     <section class="section featured-product wow fadeInUp">
        <h3 class="section-title">Clothing products</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
         
        <!-- /.item -->
          @foreach($categories as $key => $value)   
            @foreach($products as $key2 => $product)  
                @if($value['id']==$product->category->parent_id && str_contains($value['name'],'Cloth'))  
                  <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="{{ url('product-details/'.$product->id) }}">
                          <img  src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt=""></a> 
                        </div>
                        <!-- /.image --> 
                        <div class="tag hot"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="{{ url('product-details/'.$product->id) }}">{{$product->product_title}}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description">({{ $product->views+100 }} views)</div>
                       <div class="product-price"> <span class="price"> RS {{$product->price-($product->price*$product->discount)/100}} </span> <span class="price-before-discount">RS {{$product->price}}</span> </div>
                        <!-- /.product-price --> 
                        
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                             
                            <li class="lnk wishlist"> <a class="add-to-cart" href="{{ url('product-details/'.$product->id) }}" title="Show product details"> <i class="fa fa-shopping-cart"></i>  View Details </a> </li>
                            
                          </ul>
                        </div>
                        <!-- /.action --> 
                      </div>
                      <!-- /.cart --> 
                    </div>
                    <!-- /.product --> 
                    
                  </div>
                  <!-- /.products --> 
                </div>
              @endif
            @endforeach 
          @endforeach
        <!-- /.item --> 
        <!-- /.item --> 
      </div>
      <!-- /.home-owl-carousel --> 
     </section>

      <section class="section featured-product wow fadeInUp">
      <h3 class="section-title">Watch products</h3>
      <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
       
        <!-- /.item -->
          @foreach($categories as $key => $value)   
            @foreach($products as $key2 => $product)  
              @if($value['id']==$product->category->parent_id && str_contains($value['name'],'Watch'))  
                  <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="{{ url('product-details/'.$product->id) }}">
                          <img  src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt=""></a> 
                        </div>
                        <!-- /.image --> 
                        <div class="tag hot"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="{{ url('product-details/'.$product->id) }}">{{$product->product_title}}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description">({{ $product->views+100 }} views)</div>
                       <div class="product-price"> <span class="price"> RS {{$product->price-($product->price*$product->discount)/100}} </span> <span class="price-before-discount">RS {{$product->price}}</span> </div>
                        <!-- /.product-price --> 
                        
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                             
                            <li class="lnk wishlist"> <a class="add-to-cart" href="{{ url('product-details/'.$product->id) }}" title="Show product details"> <i class="fa fa-shopping-cart"></i>  View Details </a> </li>
                            
                          </ul>
                        </div>
                        <!-- /.action --> 
                      </div>
                      <!-- /.cart --> 
                    </div>
                    <!-- /.product --> 
                    
                  </div>
                  <!-- /.products --> 
                </div>
              @endif
            @endforeach 
          @endforeach
        <!-- /.item --> 
        <!-- /.item --> 
      </div>
      <!-- /.home-owl-carousel --> 
    </section>



    <!-- /.section --> 
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
    <!-- ============================================== WIDE PRODUCTS ============================================== -->
   
    <!-- /.wide-banneRS --> 
     
    <!-- ============================================== BLOG SLIDER ============================================== -->
    <section class="section latest-blog outer-bottom-vs wow fadeInUp">
      <h3 class="section-title">latest form blog</h3>
      <div class="blog-slider-container outer-top-xs">
        <div class="owl-carousel blog-slider custom-carousel">
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="#"><img src="{{ asset('public/enduser/assets/images/blog-post/post1.jpg') }}" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="##">Voluptatem accusantium doloremque laudantium</a></h3>
                <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <a href="##" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item -->
          
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="blog.html"><img src="{{ asset('public/enduser/assets/images/blog-post/post2.jpg') }}" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="##">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <a href="##" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item --> 
          
          <!-- /.item -->
          
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="blog.html"><img src="{{ asset('public/enduser/assets/images/blog-post/post1.jpg') }}" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="##">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed ut peRSpiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                <a href="##" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item -->
          
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="blog.html"><img src="{{ asset('public/enduser/assets/images/blog-post/post2.jpg') }}" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="##">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed ut peRSpiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                <a href="##" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item -->
          
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="blog.html"><img src="{{ asset('public/enduser/assets/images/blog-post/post1.jpg') }}" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="##">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed ut peRSpiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                <a href="##" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item --> 
          
        </div>
        <!-- /.owl-carousel --> 
      </div>
      <!-- /.blog-slider-container --> 
    </section>
    <!-- /.section --> 
    <!-- ============================================== BLOG SLIDER : END ============================================== --> 
    
    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <section class="section wow fadeInUp new-arriavls">
      <h3 class="section-title">New Arrivals</h3>
      <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

           @foreach($categories as $key => $value)  
            @foreach($product_new as $key2 => $product) 
              @if($value['id']==$product->category->parent_id)  

                 <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="{{ url('product-details/'.$product->id) }}">
                          <img  src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt=""></a> 
                        </div>
                        <!-- /.image --> 
                        <div class="tag hot"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="{{ url('product-details/'.$product->id) }}">{{$product->product_title}}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description">({{ $product->views+100 }} views)</div>
                       <div class="product-price"> <span class="price"> RS {{$product->price-($product->price*$product->discount)/100}} </span> <span class="price-before-discount">RS {{$product->price}}</span> </div>
                        <!-- /.product-price --> 
                        
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                             
                            <li class="lnk wishlist"> <a class="add-to-cart" href="{{ url('product-details/'.$product->id) }}" title="Show product details"> <i class="fa fa-shopping-cart"></i>  View Details </a> </li>
                            
                          </ul>
                        </div>
                        <!-- /.action --> 
                      </div>
                      <!-- /.cart --> 
                    </div>
                    <!-- /.product --> 
                    
                  </div>
                  <!-- /.products --> 
                </div>
              @endif
            @endforeach 
          @endforeach
        <!-- /.item -->
         

        <!-- /.item --> 
      </div>
      <!-- /.home-owl-carousel --> 
    </section>
    <!-- /.section --> 
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
    
  </div>
  <!-- /.homebanner-holder --> 
  <!--  CONTENT : END = --> 

  <style type="text/css">
    .product .product-image img {
  border: 2px solid #ccc;
  height: 210px;
  width: 100%;
}
  </style>