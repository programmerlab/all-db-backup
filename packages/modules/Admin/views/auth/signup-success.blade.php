
@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to admin panel</div>
                <div class="panel-body">
                   
                    <div align="center">
                      
                        <div class="alert alert-success">
                            Thank you for registration.
                        </div>  
                          <div class="alert alert-default">
                          <a href="{{url('admin')}}"> Click here to continue login </a>
                        </div>    
                      
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection