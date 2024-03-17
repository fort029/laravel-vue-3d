
@extends('layouts.shop')
@section('sripts')
    @vite(['resources/js/shop.js'])
@endsection
@section('content')    
    <section class="mt-0" id="app">
        <!-- Category Top Banner -->
        <div class="py-6 bg-img-cover bg-dark bg-overlay-gradient-dark position-relative overflow-hidden mb-4 bg-pos-center-center"
            style="background-image: url(/assets/images/banners/banner-1.jpg);">
            <div class="container position-relative z-index-20" data-aos="fade-right" data-aos-delay="300">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item breadcrumb-light"><a href="{{route('shop.index')}}">Home</a></li>
                      <li class="breadcrumb-item active breadcrumb-light" aria-current="page">Products</li>
                    </ol>
                </nav>                <h1 class="fw-bold display-6 mb-4 text-white">Best products for developers</h1>
                <div class="col-12 col-md-6">
                    <p class="lead text-white mb-0">
                        Do you love programming? You'll definitely find something here that will show you how much you like it.
                    </p>
                </div>
            </div>
        </div>
        <!-- Category Top Banner -->

        <category-products category="{{$group}}"></category-products>

    </section>
@endsection    