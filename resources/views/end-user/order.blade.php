
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('partials.menu')
            <!-- Left side column. contains the logo and sidebar -->
            <div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-group checkout-steps" id="accordion">
 

 @if($userData==null)                       <!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

    <!-- panel-heading -->
        <div class="panel-heading">
        <h4 class="unicase-checkout-title"> 
            <a  data-toggle="collapse" class="{{ ($tab==0)?'':'collapse'}}"  data-parent="#accordion" href="index.htm#collapseOne">
              <span>1</span>Checkout Method
            </a>
         </h4>
    </div>
    <!-- panel-heading -->

    <div id="collapseOne" class="panel-collapse collapse {{ ($tab==0)?'in':''}}">

        <!-- panel-body  -->
        <div class="panel-body">
            <div class="row">       

                <!-- guest-login -->            
                <div class="col-md-6 col-sm-6 guest-login">
                    <h4 class="checkout-subtitle">Guest or Register Login</h4>
                    <p class="text title-tag-line">Register with us for future convenience:</p>

                    <!-- radio-form  -->
                    <form class="register-form" role="form">
                        <div class="radio radio-checkout-unicase">  
                            <input id="guest" name="text" value="guest" checked="" type="radio">  
                          <!--   <label class="radio-button guest-check" for="guest">Checkout as Guest</label>  
                              <br> -->
                            <input id="register" name="text" value="register" type="radio" checked="checked">  
                            <label class="radio-button" for="register">Register</label>  
                        </div>  
                    </form>
                    <!-- radio-form  -->

                    <h4 class="checkout-subtitle outer-top-vs">Register and save time</h4>
                    <p class="text title-tag-line ">Register with us for future convenience:</p>
                    
                    <ul class="text instruction inner-bottom-30">
                        <li class="save-time-reg">- Fast and easy check out</li>
                        <li>- Easy access to your order history and status</li>
                    </ul>
                     <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseTwo2">
                    <button   type="button" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Continue</button> </a>
                </div>
                <!-- guest-login -->

                <!-- already-registered-login -->
                <div class="col-md-6 col-sm-6 already-registered-login">
                    <h4 class="checkout-subtitle">Already registered?</h4> 

                       <form method="POST" action="{{ url('Ajaxlogin') }}"  class="form-horizontal" role="form">
                        {!! csrf_field() !!}
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                        <input class="form-control unicase-form-control text-input" name="email" id="exampleInputEmail1" placeholder="" type="email">
                      </div>
                      <div class="form-group">
                        <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                        <input class="form-control unicase-form-control text-input" name="password" id="exampleInputPassword1" placeholder="" type="password">
                        <a href="index.htm#" class="forgot-password">Forgot your Password?</a>
                      </div>
                      <button type="submit"  class="btn-upper btn btn-primary checkout-page-button">Login</button>
                      <span id="loginError"></span>
                    </form>
                </div>  
                <!-- already-registered-login -->       

            </div>          
        </div>
        <!-- panel-body  -->

    </div><!-- row -->
</div>

  <div class="panel panel-default checkout-step-022 closeREG" id="register">
                        <div class="panel-heading">
                            <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="collapsed" id="collapseTwo22" data-parent="#accordion" href="index.htm#collapseTwo2">
                                    <span>#</span>Regisration
                                </a>
                            </h4>
                    </div>

                        <div id="collapseTwo2" class="panel-collapse collapse">
                            <div class="panel-body">
                                    <div class="col-md-6 col-sm-6 already-registered-login"> 
                                        <form class="register-form" role="form" id="register">
                                              {!! csrf_field() !!}
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">First Name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="text" name="first_name">
                                            </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Last Name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="text" name="last_name">
                                            </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="email" name="email">
                                            </div>
                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" name="password" type="password">
                                             
                                          </div>

                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Confirm Password <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" name="confirm_password" type="password">
                                             
                                          </div> 
                                          
                                          <button type="button" onclick="signUp()"  class="btn-upper btn btn-primary checkout-page-button">Continue</button> 

                                        </form>
                                        <span id="regErr" style="color: red"></span>
                                    </div>  
                            </div>
                        </div>
                    </div>
@endif
<!-- checkout-step-01  -->
                        <!-- checkout-step-02  -->

                  
                   

                    <div class="panel panel-default checkout-step-02">
                        <div class="panel-heading">
                            <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="{{($tab==1)?'':'collapsed'}}"  id="" data-parent="#accordion" href="#collapseTwo" id="collapsed_biling">
                                    <span>2</span>Billing Information  
                                </a>
                            </h4> 
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse {{($tab==1)?'in':''}}">
                            <div class="panel-body">
                                     <div class="col-md-6 col-sm-6 already-registered-login"> 
                                        <form method="post" class="register-form" role="form" id="billing" action="{{route('billing')}}"> 
                                              {!! csrf_field() !!}
                                              <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="name" placeholder="" value="{{$billing->name or ''}}" type="text" name="name" required="required">
                                            </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" value="{{$billing->email or ''}}" type="email" name="email" required="required">
                                            </div>
                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Phone/Mobile <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" name="mobile" id="mobile" placeholder="" value="{{$billing->mobile or ''}}" type="text">
                                             
                                          </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1"> Address
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" value="{{$billing->address1 or ''}}"  name="address1" type="text"> 
                                            </div>
                                                   
                                          <button type="submit" class="btn-upper btn btn-primary checkout-page-button" onclick="billing()">Continue</button> 
                                        </form>
                                    </div>  
                            </div>
                        </div>
                    </div> 

                        <!-- checkout-step-02  -->

                        <!-- checkout-step-03  -->
                        <div class="panel panel-default checkout-step-03">
                            <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="{{($tab==2)?'':'collapsed'}}" id="collapse_three" data-parent="#accordion" href="index.htm#collapseThree">
                                    <span>3</span>Shipping Information
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse {{($tab==2)?'in':''}}">
                              <div class="panel-body">
                                   <div class="col-md-6 col-sm-6 already-registered-login" id="shopping"> 
                                        <form method="post" class="register-form" role="form" id="billing" action="{{route('shipping')}}">  
                                            {!! csrf_field() !!}
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="name" placeholder="" value="{{$shipping->name or ''}}" type="text" name="name" required="required">
                                            </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" value="{{$shipping->email or ''}}" type="email" name="email" required="required">
                                            </div>
                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Phone/Mobile <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" name="mobile" id="mobile" placeholder="" value="{{$shipping->mobile or ''}} "type="text">
                                             
                                          </div>

                                            <div class="form-group">
                                                <label class="info-title" for="zip_code"> Pin Code
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="zip_code" placeholder=""  value="{{$shipping->zip_code or '' }}" name="zip_code" type="text">  
                                            </div>


                                            <div class="form-group">
                                                <label class="info-title" for="city"> City
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="city" placeholder="" type="text" name="city" value="{{$shipping->city or '' }}"> 
                                            </div>
 

                                            <div class="form-group">
                                                <label class="info-title" for="state"> State
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="state" placeholder="state" value="{{$shipping->state or ''}}" name="state" type="text"> 
                                            </div>


                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1"> Address1
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" value="{{$shipping->address1 or '' }}"" type="text" name="address1"> 
                                            </div>

                                               <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1"> Address2
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" value="{{$shipping->address2 or '' }}"" type="text" name="address2"> 
                                            </div>
                                    
                                          <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Continue</button>
                                        </form>
                                    </div>  
                              </div>
                            </div>
                        </div>
                        <!-- checkout-step-03  -->

                        <!-- checkout-step-04  -->
                        <div class="panel panel-default checkout-step-04">
                            <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="{{($tab==3)?'':'collapsed'}}" data-parent="#accordion" href="index.htm#collapseFour">
                                    <span>4</span>Shipping Method
                                </a>
                              </h4> 
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse {{($tab==3)?'in':''}}">
                                <div class="panel-body">
                                  <div class="col-md-6 col-sm-6 already-registered-login"> 
                                        <form method="post" class="register-form" role="form" id="billing" action="{{route('shippingMethod')}}">  
                                            {!! csrf_field() !!}
                                            
                                            <div class="form-group"> 
                                                <input class="form-control  " id="cod" placeholder="" type="hidden" value="cod">Cash On delivery
                                            </div> 
                                         <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseSix">
                                          <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Continue</button></a>
                                        </form>
                                    </div>  
                                </div>
                            </div>
                        </div> 

                        <!-- checkout-step-06  -->
                        <div class="panel panel-default checkout-step-06">
                            <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseSix">
                                    <span>6</span>Order Review
                                </a>
                              </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                            <div class="">
                        <div class="shopping-cart">
                            <div class="shopping-cart-table ">
                                <div class="table-responsive">
                                 @if(count($cart))
                                    <table class="table">
                                        <thead>
                                                <tr>
                                            <th class="cart-product-name item">Product Name</th>
                                            <th class="cart-edit item">Price</th>
                                            <th class="cart-qty item">Quantity</th>
                                            <th class="cart-sub-total item">Subtotal</th> 
                                        </tr>
                                        </thead><!-- /thead -->
                              
                                     <tbody>
                                        @foreach($cart as  $item)
                                        <tr> 
                                            <td class="cart_description">
                                                    <h4><a href="">{{$item->name}}</a></h4> 
                                            </td>
                                            <td class="cart_price">
                                                <p>Rs {{$item->price}}</p>
                                            </td>
                                            <td class="cart_quantity">
                                                <div class="cart_quantity_button">
                                                    {{$item->qty}} 
                                                    
                                                </div>
                                            </td>
                                            <td class="cart_total">
                                                <p class="cart_total_price">Rs {{ money_format('%!i', $item->subtotal) }}</p>
                                            </td>  
                                        </tr> 
                                        @endforeach
                                    @else
                                <p>You have no items in the shopping cart</p>
                                @endif
                                </tbody>
                            </table><!-- /table -->
                        </div>
                        <hr>
                    </div><!-- /.shopping-cart-table -->                
                   
 

                        <div class="col-md-12 col-sm-12 cart-shopping-total">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="cart-sub-total">
                                                <span class="inner-left-md">Subtotal RS {{$sub_total}} </span>
                                            </div>
                                            <div class="cart-grand-total">
                                                <span class="inner-left-md">Total RS {{$sub_total}} </span>
                                            </div>
                                             <div class="cart-grand-total">
                                             <br><br>
                                               <a href="{{url('orderSuccess')}}" class="btn btn-primary">Place Order</a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead><!-- /thead -->

                            </table><!-- /table -->
                        </div><!-- /.cart-shopping-total -->            
                    </div><!-- /.shopping-cart -->
                </div> <!-- /.row -->
                                </div>
                            </div>
                        </div>
                        <!-- checkout-step-06  -->
                        
                    </div><!-- /.checkout-steps -->
                </div>
                <div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                            </div> 
                            <div class="">
                                <ul class="nav nav-checkout-progress list-unstyled">
                                 <li> Total Amount  :  {{ $sub_total }} <li><br>
                                  <li> Total Item  :  {{ $total_item }} </li> <br>
                               
                                </ul>  
                                 <a href="{{url('/')}}" class="btn btn-success">Continue Shopping</a> 
                                  <a href="{{url('orderSuccess')}}" class="btn btn-primary">Place Order</a>   
                                        
                            </div>
                        </div>
                    </div>
                </div> 
<!-- checkout-progress-sidebar -->              </div>
            </div><!-- /.row -->
            </div><!-- /.checkout-box -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    </div><!-- /.container -->
        </div>

            
    @stop