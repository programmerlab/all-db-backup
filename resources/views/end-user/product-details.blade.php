@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 
            <div class="row single-product">
                @include('partials.menu')
                 @include('partials.breadcrumb')
         
                @include('partials.product_detail_sidebar')
                @include('partials.product_details')
            </div>
        @stop