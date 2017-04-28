@extends('packages::layouts.master')
  @section('title', 'Dashboard')
    @section('header')
    <h1>Dashboard</h1>
    @stop
    @section('content') 
      @include('packages::partials.main-header')
      <!-- Left side column. contains the logo and sidebar -->
      @include('packages::partials.main-sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <section style="margin:15px 30px -30px 30px">
        @if(Input::has('error'))
                 <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                 <h4> <i class="icon fa fa-check"></i>  
                    Sorry! You are trying to access invalid URL. <a href="{{url('admin')}}"> Reset</a></h4>

                 </div>
            @endif
       <hr>  
      </section>
        @if(!Input::has('error'))
          <!-- Main content -->
          <section class="content">
            <!-- Small boxes (Stat box) -->                      
              <div class="col-lg-3 col-xs-3">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>{{ $user }}</h3> 
                    <p>Total Users</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="{{route('user')}}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col -->

                <div class="col-lg-3 col-xs-3">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>{{ $product }}</h3> 
                    <p>Total products</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="{{route('product')}}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col -->

                <div class="col-lg-3 col-xs-3">
                <!-- small box -->
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h3>{{ $category }}</h3> 
                    <p>Total category</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="{{route('category')}}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col -->

               <div class="col-lg-3 col-xs-3">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>{{ $order }}</h3> 
                    <p>Total Order</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="{{route('transaction')}}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col --> 
               <div class="col-lg-3 col-xs-3">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>{{ $today_order }}</h3> 
                    <p>Total  Order Today </p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="{{route('transaction')}}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col --> 

               <div class="col-lg-3 col-xs-3">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>Site Settings</h3> 
                    <p>Update Site information </p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="{{route('setting')}}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col --> 

              
            
 

            </div><!-- /.row -->
            <!-- Main row -->  
          </section>
        @endif 
      </div><!-- /.content-wrapper -->
     

@stop
