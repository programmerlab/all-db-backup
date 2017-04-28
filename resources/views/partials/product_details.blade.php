<div class="col-md-9">
    <div class="detail-block">

        <div style="visibility: visible; animation-name: fadeInUp;" class="row  wow fadeInUp animated">
                
            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div class="owl-carousel owl-theme" style="opacity: 1; display: block;" id="owl-single-product">

                        <div class="owl-wrapper-outer">
                            <div style="width: 5742px; left: 0px; display: block;" class="owl-wrapper">
                                
                                <div style="width: 319px;" class="owl-item">
                                    <div class="single-product-gallery-item" id="slide1">
                                             <img style="width: 100%" src="{{ asset('storage/uploads/products/'. $product->photo) }}" alt="">
                                    </div>
                                </div>

                            </div>
                        </div> 
 
                    </div><!-- /.single-product-slider --> 

                </div><!-- /.single-product-gallery -->
            </div>
<!-- /.gallery-holder -->        			
			<div class="col-sm-6 col-md-7 product-info-block">
				<div class="product-info">
					<h1 class="name">{{$product->product_title}}</h1>
				 

					<div class="stock-container info-container m-t-10">
						<div class="row">
							<div class="col-sm-2">
								<div class="stock-box">
									<span class="label">Availability :</span>
								</div>	
							</div>
							<div class="col-sm-9">
								<div class="stock-box">
									<span class="value">In Stock</span>
								</div>	
							</div>
						</div><!-- /.row -->	
					</div><!-- /.stock-container -->

					<div class="description-container m-t-20">
						 {!! str_limit($product->description,100) !!}
					</div><!-- /.description-container -->

					<div class="price-container info-container m-t-20">
						<div class="row">
							

							<div class="col-sm-6">
								<div class="price-box">
									<span class="price">RS{{$product->price-($product->price*$product->discount/100)}}</span>
									<span class="price-strike">RS{{$product->price}}</span>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="favorite-button m-t-10">
									<a data-original-title="Wishlist" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="" href="index.htm#">
									    <i class="fa fa-heart"></i>
									</a>
									 
									<a data-original-title="E-mail" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="" href="index.htm#">
									    <i class="fa fa-envelope"></i>
									</a>
								</div>
							</div>

						</div><!-- /.row -->
					</div><!-- /.price-container -->

					<div class="quantity-container info-container">
						<div class="row">
							
							<div class="col-sm-2">
								<span class="label">Qty :</span>
							</div>
							
							<div class="col-sm-2">
								<div class="cart-quantity">
									<div class="quant-input">
						                
						                <input value="1" type="number" min="1" onchange="updateCart(this.value)">
					              </div> 
					            </div>
							</div>

							<div class="col-sm-2" style="margin-right: 70px;">
								<a href="{{ url('addToCart/'.$product->id) }}" id="addToCart" class="btn btn-primary">
                                <i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
							</div>
                            | 
                            <div class="col-sm-2">
                                <a href="{{ url('buyNow/'.$product->id) }}" class="btn btn-success">
                                <i class="fa fa-shopping-cart inner-right-vs"></i> BUY </a>
                            </div>


							
						</div><!-- /.row -->
					</div><!-- /.quantity-container --> 
					
				</div><!-- /.product-info -->
			</div><!-- /.col-sm-7 -->
		</div><!-- /.row -->
     </div>  

       <div class="product-tabs inner-bottom-xs  wow fadeInUp">
        <div class="row">
            <div class="col-sm-3">
                  <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                        <li class="active">
                            <a data-toggle="tab" href="index.htm#description">DESCRIPTION</a>
                        </li>
                       <!--  <li>
                            <a data-toggle="tab" href="index.htm#tags">TAGS</a>
                        </li> -->
                  </ul><!-- /.nav-tabs #product-tabs -->
            </div>
            <div class="col-sm-9"> 
                  <div class="tab-content">
                        
                            <div id="description" class="tab-pane in active">
                                <div class="product-tab">
                                    <p class="text">
                                    	
                                    	 {!! $product->description !!}

                                    </p>
                                </div>      
                            </div><!-- /.tab-pane -->

                       

                      </div><!-- /.tab-content -->
                </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.product-tabs -->
  
</div>

<script type="text/javascript">
	
	function updateCart(value) {
		  
		  var href = $('#addToCart').attr('href');

		  $('#addToCart').attr('href',href+'?item='+value); 
	}
</script>