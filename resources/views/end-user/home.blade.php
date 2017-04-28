
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('partials.menu')
            <!-- Left side column. contains the logo and sidebar -->
            <div class="row">
                @include('partials.side-category-tab')
                @include('partials.home-slider')
            </div>

            <div class="row"> 
                @include('partials.home-left-deals-offer-sidebar')

                @include('partials.home-right-product-panel')

            </div>
        @stop