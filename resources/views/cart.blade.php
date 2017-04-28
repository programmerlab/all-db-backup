@extends('layouts.app')

@section('content')       
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            @if(count($cart))
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="product">Product</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>   
                    @foreach($cart as $key => $item)

                    <tr>
                        <td class="cart_product">
                           @foreach($product_photo as $key => $photo)
                                @if($photo['id']==$item->id)
                                 <a href=""><img src="{{url('public/uploads/products/'.$photo['photo'])}}" width="100px" height="75px"></a>
                                @endif
                            @endforeach
                           
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$item->name}}</a></h4>
                            <p>Web ID: {{$item->id}}</p>
                        </td>
                        <td class="cart_price">
                            <p>${{$item->price}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href='{{url("updateCart?product_id=$item->id&increment=1")}}'> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="1">
                               <a class="cart_quantity_down" href='{{url("updateCart?product_id=$item->id&decrease=1")}}'> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                          <p class="cart_total_price"> INR {{$item->subtotal}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete btn btn-danger" href="{{url("removeItem/".$item->id)}}"><i class="fa fa-times">Remove</i></a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                <p>There is no items in the shopping cart</p>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
         </div>
        <div class="row">
           
            <div class="col-sm-6">
                <div class="total_area" align="right">
                    <ul align="right" >
                        <p>Cart Total <span>{{Cart::subtotal()}}</span></p>
                    </ul>
                    <a class="btn btn-default update" href="{{url('clear-cart')}}">Clear Cart</a>
                      <a class="btn btn-default update" href="{{url('product')}}">Continue Shopping</a>
                    <a class="btn btn-default check_out" href="{{url('checkout')}}">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->
@endsection