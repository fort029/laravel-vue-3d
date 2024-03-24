@extends('layouts.shop')
@section('content') 
    <!-- Main Section-->
    <section class="mt-5 ">
        <!-- Page Content Goes Here -->

        <!-- Product Top-->
        <section class="container">

            <!-- Breadcrumbs-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('shop.index')}}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{route('shop.category')}}">Porducts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                </ol>
            </nav>            <!-- /Breadcrumbs-->

            <div class="row g-5">

                <!-- Images Section-->
                <div class="col-12 col-lg-7">
                    <div class="row g-1">
                        <div class="swiper-container gallery-thumbs-vertical col-2 pb-4">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide bg-light bg-light h-auto">
                                <picture>
                                    <img class="img-fluid mx-auto d-table" src="{{$product->img}}" alt="">
                                </picture>
                              </div>
                              <div class="swiper-slide bg-light bg-light h-auto">
                                  <picture>
                                    <img class="img-fluid mx-auto d-table" src="{{$product->img}}" alt="">
                                </picture>
                              </div>
                              <div class="swiper-slide bg-light bg-light h-auto">
                                  <picture>
                                    <img class="img-fluid mx-auto d-table" src="{{$product->img}}" alt="">
                                </picture>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-container gallery-top-vertical col-10">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide bg-white h-auto">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{$product->img}}" alt="" data-zoomable>
                                    </picture>
                                </div>
                                <div class="swiper-slide bg-white h-auto">
                                    <picture>
                                      <img class="img-fluid d-table mx-auto" src="{{$product->img}}" alt="" data-zoomable>
                                  </picture>
                                </div>
                                <div class="swiper-slide bg-white h-auto">
                                    <picture>
                                      <img class="img-fluid d-table mx-auto" src="{{$product->img}}" alt="" data-zoomable>
                                  </picture>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <!-- /Images Section-->

                <!-- Product Info Section-->
                <div class="col-12 col-lg-5">
                    <div class="pb-3">
                    
                        <!-- Product Name, Review, Brand, Price-->
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="small fw-bolder text-uppercase tracking-wider text-muted mb-0 lh-1">Billabong</p>
                            <div class="d-flex justify-content-start align-items-center">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: {{$rating * 100 / 5}}%">
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                    </div>
                                    <div class="stars">
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    </div>
                                </div>            <small class="text-muted d-inline-block ms-2 fs-bolder">({{$rating_count}})</small>
                            </div>
                        </div>
                        <h1 class="mb-2 fs-2 fw-bold">{{$product->name}}</h1>
                        <div class="d-flex justify-content-start align-items-center">
                        @if($product->discount>0)
                            <p class="lead fw-bolder m-0 fs-3 lh-1 text-danger me-2">${{$product->price_discount}}</p>
                            <s class="lh-1 me-2"><span class="fw-bolder m-0">${{$product->price}}</span></s>
                            <p class="lead fw-bolder m-0 fs-6 lh-1 text-success">Save ${{$product->price-$product->price_discount}}</p>
                        @else
                            <p class="lead fw-bolder m-0 fs-3 lh-1 me-2">${{$product->price_discount}}</p>
                        @endif
                        </div>
                        <div class="fs-6">(without tax)</div>
                        <!-- /Product Name, Review, Brand, Price-->
                    
                        <!-- Product Views-->
                        <div class="d-flex justify-content-start mt-3">
                            <div class="alert bg-light rounded py-1 px-2 d-table m-0">
                                <div class="d-flex justify-content-start align-items-center">
                                    <i class="ri-fire-fill lh-1 text-orange"></i>
                                    <div class="ms-2">
                                        <small class="opacity-75 fw-bolder lh-1">14 views today</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Views-->
                        <form method="POST" action="{{route('shop.add_product',['id'=>$product])}}">
                        @csrf
                        <!-- Product Options-->
                        <div class="border-top mt-4 mb-3">
                            @isset($product->options_decode->color)
                                <div class="product-option mb-4 mt-4">
                                    <small class="text-uppercase d-block fw-bolder mb-2">
                                        Colour : <span class="selected-option fw-bold">{{$product->options_decode->color[0]}}</span>
                                    </small>
                                    <div class="d-flex justify-content-start">
                                     @foreach ($product->options_decode->color as $index=>$color )
                                        <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-{{$color=='white'?'light':$color}}" >
                                            <input type="radio" class="form-check-color-input" id="option-colour-{{$index+1}}" name="option-colour"
                                                value="{{$color}}" {{$index==0?'checked':''}}>
                                            <label class="form-check-label" for="option-colour-{{$index+1}}"></label>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            @endif
                            @isset($product->options_decode->size)
                            <div class="product-option">
                                <small class="text-uppercase d-block fw-bolder mb-2">
                                    Size (UK) : <span class="selected-option fw-bold">{{$product->options_decode->size[0]}}</span>
                                </small>
                                <div class="form-group">
                                    <select name="selectSize" class="form-control" data-choices required>
                                        @foreach ($product->options_decode->size as $size )
                                        <option value="{{$size}}">{{$size}}</option>
                                        @endforeach   
                                    </select>
                                </div>
                            </div>
                            @endif
                        </div>
                        <!-- /Product Options-->
                    
                        <!-- Add To Cart-->
                        <div class="d-flex justify-content-between mt-3">
                            <button type="submit" class="btn btn-dark btn-dark-chunky flex-grow-1 me-2 text-white">Add To Cart</button>
                            <button type="button" class="btn btn-orange btn-orange-chunky"><i class="ri-heart-line"></i></button>
                        </div>
                        <!-- /Add To Cart-->
                        </form>
                        <!-- Socials-->
                        <div class="my-4">
                            <div class="d-flex justify-content-start align-items-center">
                                <p class="fw-bolder lh-1 mb-0 me-3">Share</p>
                                <ul class="list-unstyled p-0 m-0 d-flex justify-content-start lh-1 align-items-center mt-1">
                                    <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i class="ri-facebook-box-fill"></i></a></li>
                                    <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i class="ri-instagram-fill"></i></a></li>
                                    <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i class="ri-pinterest-fill"></i></a></li>
                                    <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i class="ri-twitter-fill"></i></a></li>
                                </ul>
                            </div>    </div>
                        <!-- Socials-->
                    
                        <!-- Special Offers-->
                        <div class="bg-light rounded py-2 px-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex border-0 px-0 bg-transparent">
                                    <i class="ri-truck-line"></i>
                                    <span class="fs-6 ms-3">Standard delivery free for orders over $9.99.</span>
                                </li>
                            </ul>
                        </div>
                        <!-- /Special Offers-->
                    
                    </div>                </div>
                <!-- / Product Info Section-->
            </div>
        </section>
        <!-- / Product Top-->

        <section>

            <!-- Product Tabs-->
            <div class="mt-7 pt-5 border-top">
                <div class="container">
                    <!-- Tab Nav-->
                    <ul class="nav justify-content-center nav-tabs nav-tabs-border mb-4" id="myTab" role="tablist">
                      <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                        <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0 active" id="details-tab" data-bs-toggle="tab" href="#details"
                          role="tab" aria-controls="details" aria-selected="true">The Details</a>
                      </li>
                      <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                        <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="reviews-tab" data-bs-toggle="tab" href="#reviews"
                          role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                      </li>
                      <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                        <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="delivery-tab" data-bs-toggle="tab" href="#delivery"
                          role="tab" aria-controls="delivery" aria-selected="false">Delivery</a>
                      </li>
                    </ul>
                    <!-- / Tab Nav-->
                    
                    <!-- Tab Content-->
                    <div class="tab-content" id="myTabContent">
                    
                      <!-- Tab Details Content-->
                      <div class="tab-pane fade show active py-5" id="details" role="tabpanel" aria-labelledby="details-tab">
                        <div class="col-12 col-lg-10 mx-auto">
                          <div class="row g-5">
                            <div class="col-12 col-md-6">
                              <p>{{$product->description}}</p>
                            </div>
                            <div class="col-12 col-md-6">
                              <ul>
                                <li>Best of the best</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Tab Details Content-->
                    
                      <!-- Review Tab Content-->
                      <div class="tab-pane fade py-5" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <!-- Customer Reviews-->
                        <section class="reviews">
                            <div class="col-lg-12 text-center pb-5">
                        
                                <h2 class="fs-1 fw-bold d-flex align-items-center justify-content-center">{{$rating}} <small
                                        class="text-muted fw-bolder ms-3 fw-bolder fs-6">({{$rating_count}})</small></h2>
                                <div class="d-flex justify-content-center">
                                    <!-- Review Stars Medium-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: {{$rating * 100 / 5}}%">
                                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                        </div>
                                    </div>        </div>
                        
                        
                                <div class="bg-light rounded py-3 px-4 mt-3 col-12 col-md-6 col-lg-5 mx-auto">
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                                            <span class="fw-bolder">Fit</span>
                                            <!-- Review Stars Small-->
                                            <div class="rating position-relative d-table">
                                                <div class="position-absolute stars" style="width: {{$rating * 100 / 5}}%">
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                </div>
                                                <div class="stars">
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                </div>
                                            </div>                </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                                            <span class="fw-bolder">Value for money</span>
                                            <!-- Review Stars Small-->
                                            <div class="rating position-relative d-table">
                                                <div class="position-absolute stars" style="width: {{$rating * 100 / 5}}%">
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                </div>
                                                <div class="stars">
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                </div>
                                            </div>                </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                                            <span class="fw-bolder">Build quality</span>
                                            <!-- Review Stars Small-->
                                            <div class="rating position-relative d-table">
                                                <div class="position-absolute stars" style="width: {{$rating * 100 / 5}}%">
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                </div>
                                                <div class="stars">
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                </div>
                                            </div>                </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                                            <span class="fw-bolder">Style</span>
                                            <!-- Review Stars Small-->
                                            <div class="rating position-relative d-table">
                                                <div class="position-absolute stars" style="width: {{$rating * 100 / 5}}%">
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                </div>
                                                <div class="stars">
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                </div>
                                            </div>                </li>
                                    </ul>
                                </div>
                        
                                <!-- Review Modal-->
                                <button type="button" class="btn btn-dark mt-4 hover-lift-sm hover-boxshadow disable-child-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasReview" aria-controls="offcanvasReview">
                                    Write A Review <i class="ri-discuss-line align-bottom ms-1"></i>
                                </button>
                                <!-- / Review Modal Button-->
                        
                            </div>
                        
                            <!-- Single Review-->
                            <article class="py-5 border-bottom border-top">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <small class="text-muted fw-bolder">08/12/2021</small>
                                        <p class="fw-bolder">Ben Sandhu, Ireland</p>
                                        <span class="bg-success-faded fs-xs fw-bolder text-uppercase p-2">Verified Customer</span>
                                    </div>
                                    <div class="col-12 col-md-8 mt-4 mt-md-0">
                                        <!-- Review Stars Small-->
                                        <div class="rating position-relative d-table">
                                            <div class="position-absolute stars" style="width: {{$rating * 100 / 5}}%">
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                            </div>
                                            <div class="stars">
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            </div>
                                        </div>                <p class="fw-bolder mt-4">Happy with this considering the price</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi, architecto placeat nam officia
                                            sapiente ipsam at dolorum quisquam, ipsa earum qui laboriosam. Pariatur recusandae nihil, architecto
                                            reprehenderit perferendis obcaecati. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Distinctio sint nesciunt velit quae, quisquam ullam veritatis itaque repudiandae. Inventore quae
                                            doloribus modi nihil illum accusamus voluptas suscipit neque perferendis totam!</p>
                        
                                        <small class="fw-bolder bg-light d-table rounded py-1 px-2">Yes, I would recommend the product</small>
                                        <div class="d-block d-md-flex mt-3 justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start"
                                                title=""><small>Was this review helpful?
                                                    <i class="ri-thumb-up-line ms-4"></i> 112 <i class="ri-thumb-down-line ms-2"></i>
                                                    23</small></a>
                                            <a href="#"
                                                class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start mt-3 mt-md-0"
                                                title=""><small>Flag as
                                                    inappropriate <i class="ri-flag-2-line ms-2"></i></small></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- /Single Review-->
                        
                            <!-- Single Review-->
                            <article class="py-5 border-bottom ">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <small class="text-muted fw-bolder">08/12/2021</small>
                                        <p class="fw-bolder">Patricia Smith, London</p>
                                        <span class="bg-success-faded fs-xs fw-bolder text-uppercase p-2">Verified Customer</span>
                                    </div>
                                    <div class="col-12 col-md-8 mt-4 mt-md-0">
                                        <!-- Review Stars Small-->
                                        <div class="rating position-relative d-table">
                                            <div class="position-absolute stars" style="width: 80%">
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                            </div>
                                            <div class="stars">
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            </div>
                                        </div>                <p class="fw-bolder mt-4">Very happy with my purchase so far...</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi, architecto placeat nam officia
                                            sapiente ipsam at dolorum quisquam, ipsa earum qui laboriosam. Pariatur recusandae nihil, architecto
                                            reprehenderit perferendis obcaecati. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Distinctio sint nesciunt velit quae, quisquam ullam veritatis itaque repudiandae. Inventore quae
                                            doloribus modi nihil illum accusamus voluptas suscipit neque perferendis totam!</p>
                        
                                        <small class="fw-bolder bg-light d-table rounded py-1 px-2">Yes, I would recommend the product</small>
                                        <div class="d-block d-md-flex mt-3 justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start"
                                                title=""><small>Was this review helpful?
                                                    <i class="ri-thumb-up-line ms-4"></i> 112 <i class="ri-thumb-down-line ms-2"></i>
                                                    23</small></a>
                                            <a href="#"
                                                class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start mt-3 mt-md-0"
                                                title=""><small>Flag as
                                                    inappropriate <i class="ri-flag-2-line ms-2"></i></small></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- /Single Review-->
                        
                            <!-- Single Review-->
                            <article class="py-5 border-bottom ">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <small class="text-muted fw-bolder">08/12/2021</small>
                                        <p class="fw-bolder">Jack Jones, Scotland</p>
                                        <span class="bg-success-faded fs-xs fw-bolder text-uppercase p-2">Verified Customer</span>
                                    </div>
                                    <div class="col-12 col-md-8 mt-4 mt-md-0">
                                        <!-- Review Stars Small-->
                                        <div class="rating position-relative d-table">
                                            <div class="position-absolute stars" style="width: {{$rating * 100 / 5}}%">
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                                <i class="ri-star-fill text-dark mr-1"></i>
                                            </div>
                                            <div class="stars">
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            </div>
                                        </div>                <p class="fw-bolder mt-4">I wish it was a little cheaper - otherwise love this!</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi, architecto placeat nam officia
                                            sapiente ipsam at dolorum quisquam, ipsa earum qui laboriosam. Pariatur recusandae nihil, architecto
                                            reprehenderit perferendis obcaecati. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Distinctio sint nesciunt velit quae, quisquam ullam veritatis itaque repudiandae. Inventore quae
                                            doloribus modi nihil illum accusamus voluptas suscipit neque perferendis totam!</p>
                        
                                        <small class="fw-bolder bg-light d-table rounded py-1 px-2">Yes, I would recommend the product</small>
                                        <div class="d-block d-md-flex mt-3 justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start"
                                                title=""><small>Was this review helpful?
                                                    <i class="ri-thumb-up-line ms-4"></i> 112 <i class="ri-thumb-down-line ms-2"></i>
                                                    23</small></a>
                                            <a href="#"
                                                class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start mt-3 mt-md-0"
                                                title=""><small>Flag as
                                                    inappropriate <i class="ri-flag-2-line ms-2"></i></small></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- /Single Review-->
                        
                        
                            <a href="#" class="btn btn-dark d-table mx-auto mt-6 mb-3 hover-lift-sm hover-boxshadow" title="">Load More
                                Reviews</a>
                            <p class="text-muted text-center fw-bolder">Showing 3 of 1234</p>
                        
                        </section>  </div>
                      <!-- / Review Tab Content-->
                    
                      <!-- Delivery Tab Content-->
                      <div class="tab-pane fade py-5" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                        <div class="col-12 col-md-10 col-lg-8 mx-auto">
                          <p>We are now offering contact-free delivery so that you can still receive your parcels safely without requiring a
                            signature. Please see below for the available delivery methods, costs and timescales.</p>
                          <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-4 bg-transparent">
                              <div>
                                <span class="fw-bolder d-block">Standard Delivery</span>
                                <span class="text-muted">Delivery within 5 days of placing your order.</span>
                              </div>
                              <p class="m-0 lh-1 fw-bolder">$9.99</p>
                            </li>
                          </ul>
                          <div class="bg-light rounded p-3">
                            <p class="fs-6">Form more information, please see our delivery FAQs <a href="#">here</a></p>
                            <p class="m-0 fs-6">If you do not find the answer to your query, please contact our customer support team on
                              <b>0800 123 456</b> or email us at <b>support@domain.com</b>. We aim to respond within 48 hours to queries.
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- / Delivery Tab Content-->
                    </div>
                    <!-- / Tab Content-->                </div>
            </div>
            <!-- / Product Tabs-->
        </section>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->
@endsection 
