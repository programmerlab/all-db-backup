
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('partials.menu')
            @include('partials.breadcrumb')
         
            <div class="row">
               @include('partials.product-sidebar') 
               
                @include('partials.product') 
            </div> 
    @stop