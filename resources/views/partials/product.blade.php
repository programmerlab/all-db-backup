 <div class="col-md-9"> 
        <!--  SECTION – HERO ========================================= -->
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="index.htm#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="index.htm#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
             <!--  <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="index.htm#">position</a></li>
                        <li role="presentation"><a href="index.htm#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="index.htm#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="index.htm#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div> 
                </div> 
              </div> -->
              <!-- /.col -->
             <!--  <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="index.htm#">1</a></li>
                        <li role="presentation"><a href="index.htm#">2</a></li>
                        <li role="presentation"><a href="index.htm#">3</a></li>
                        <li role="presentation"><a href="index.htm#">4</a></li>
                        <li role="presentation"><a href="index.htm#">5</a></li>
                        <li role="presentation"><a href="index.htm#">6</a></li>
                        <li role="presentation"><a href="index.htm#">7</a></li>
                        <li role="presentation"><a href="index.htm#">8</a></li>
                        <li role="presentation"><a href="index.htm#">9</a></li>
                        <li role="presentation"><a href="index.htm#">10</a></li>
                      </ul>
                    </div>
                  </div> 
                </div> 
              </div> -->
              <!-- /.col --> 
            </div>
            <!-- /.col -->
           <!--  <div class="col col-sm-6 col-md-4 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="index.htm#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="index.htm#">1</a></li>
                  <li class="active"><a href="index.htm#">2</a></li>
                  <li><a href="index.htm#">3</a></li>
                  <li><a href="index.htm#">4</a></li>
                  <li class="next"><a href="index.htm#"><i class="fa fa-angle-right"></i></a></li>
                </ul> 
              </div> 
              </div> -->
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
           
            <div class="tab-pane  " id="grid-container">
              <div class="category-product">
                <div class="row">
                 @if($products->count()==0) Record not found @endif 
                 @foreach($products as $key => $product)
                  <div style="visibility: hidden; animation-name: none;" class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="product-details">

                          <img  style="float: left;height: 200px;border: 1px solid #ccc;" src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt="{{ $product->product_title }}"> 

                          </a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="product-details">{{ $product->product_title }}</a></h3>
                          
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> RS {{ $product->price-($product->price*$product->discount)/100}} </span> <span class="price-before-discount">RS {{ $product->price}}</span> </div>
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
                  <!-- /.item --> 
                 @endforeach  
                  
                  <!-- /.item --> 
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
             
            <div class="tab-pane active" id="list-container">
               @if($products->count()==0) Record not found @endif 
              <div class="category-product">
               @foreach($products as $key => $product) 
              <div style="visibility: visible; animation-name: fadeInUp;" class="category-product-inner wow fadeInUp animated">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image" style="float: left"> 
                            <a href="{{ url('product-details/'.$product->id) }}" > 
                              <img src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt="">
                            </a>
                             </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="{{ url('product-details/'.$product->id)}}">{{$product->product_title}}</a></h3>
                            <br>
                            
                            <div class="product-price"> 
                              <span class="price"> 
                              RS {{ $product->price-($product->price*$product->discount)/100}} </span> 
                            <span class="price-before-discount">
                              RS {{$product->price}}</span> 
                            </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">{!! str_limit($product->description,100) !!}

                            <a href="{{ url('product-details/'.$product->id) }}"> More</a>   </div>
                            <div class="cart clearfix animate-effect">
                              <div class="action" col-md-12> 
                                  
                                <div class="col-sm-7" > 
                                  <a href="{{ url('addToCart/'.$product->id) }}" id="addToCart" class="btn btn-primary"> <i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                              </div> 
                            <div class="col-sm-4">
                                <a href="{{ url('buyNow/'.$product->id) }}" class="btn btn-success">
                                <i class="fa fa-shopping-cart inner-right-vs"></i> BUY </a>
                            </div>
                                   
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                 @endforeach
                
                  <!-- /.products --> 
                </div>
              </div>
             


              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>