<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Vendor CSS -->
    @vite(['resources/scss/shop/libs.scss'])

    <!-- Main CSS -->
    @vite(['resources/scss/shop/theme.scss'])

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Litris - the best shop in the world</title>

    @yield('styles')

    @vite(['resources/js/shop.js'])
    @yield('sripts')
    
</head>
<body>
<div id="app">

    <!-- Navbar -->
    <div class="position-relative z-index-30">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column  {{Route::currentRouteName()=='shop.index'?'border-0 position-absolute w-100 z-index-30 bg-transparent navbar-dark navbar-transparent bg-white-hover transition-all':''}}">
        <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
            <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
    
                <!-- Logo-->
                <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0" href="{{route('shop.index')}}">
                    <!-- Start of Logo-->
                    <div class="d-flex align-items-center">
                        <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                           <path fill="currentColor" class="svg-logo-white" d="M 42.611 114.605 L 42.359 44.034 L 77.106 43.984 L 77.979 114.259 L 156.93 59.92 L 194 100.65 L 194 31.94 C 194 14.3 179.7 0 162.06 0 L 31.94 0 C 14.3 0 0 14.3 0 31.94 L 0 114.51 L 42.611 114.605 Z"/>
  <path fill="currentColor" class="svg-logo-dark" d="M 154.838 87.384 L 80.496 135.159 L 80.127 142.83 L 136.51 144.215 L 138.068 173.934 L 42.551 173.565 L 41.869 135.239 L 0 134.86 L 0 162.06 C 0 179.7 14.3 194 31.94 194 L 162.06 194 C 179.7 194 194 179.7 194 162.06 L 194 125.83 L 154.838 87.384 Z"/>
                            </svg>
                        </div> <span class="fs-5">Litris</span>
                    </div>
                    <!-- / Logo-->
                    
                </a>
                <!-- / Logo-->
    
                <!-- Main Navigation-->
                <div class="ms-5 flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1" id="navbarNavDropdown">
    
                    <!-- Mobile Nav Toggler-->
                    <button
                        class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 position-absolute top-0 end-0 mt-3 me-2"
                        data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ri-close-circle-line ri-2x"></i>
                    </button>
                    <!-- / Mobile Nav Toggler-->
    
                    <ul class="navbar-nav py-lg-2 mx-auto">
                        <li class="nav-item me-lg-4 dropdown position-static">
                            <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <!-- Menswear dropdown menu-->
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="container">
                                    <div class="row g-0">
                                        <!-- Dropdown Menu Links Section-->
                                        <div class="col-12 col-lg-7">
                                            <div class="row py-lg-5">
                                            
                                                <!-- menu row-->
                                                <div class="col col-lg-6 mb-5 mb-sm-0">
                                                    <h6 class="dropdown-heading">Categorys</h6>
                                                    <ul class="list-unstyled">
                                                        @foreach ( App\Models\Product::getCategorys() as $group)
                                                             <li class="dropdown-list-item">
                                                                <a class="dropdown-item" href="{{route('shop.category_group', $group->category)}}">
                                                                    {{$group->category}}
                                                                </a>
                                                                </li>
                                                        @endforeach
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all"
                                                                href="{{route('shop.category')}}">View All</a></li>
                                                    </ul>
                                            
                                                </div>
                                                <!-- /menu row-->
                                            
                                                
                                            
                                            </div>                    </div>
                                        <!-- /Dropdown Menu Links Section-->
                    
                                        <!-- Dropdown Menu Images Section-->
                                        <div class="d-none d-lg-block col-lg-5">
                                            <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute" style="background-image: url(/assets/images/banners/code-and-coffee.jpeg);"></div>
                                        </div>
                                        <!-- Dropdown Menu Images Section-->
                                    </div>
                                </div>
                            </div>
                            <!-- / Menswear dropdown menu-->
                        </li>
                        <li class="nav-item dropdown me-lg-4">
                            <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('shop.index')}}">Homepage</a></li>
                                <li><a class="dropdown-item" href="{{route('shop.category')}}">Category</a></li>
                                <li><a class="dropdown-item" href="{{route('shop.basket')}}">Cart</a></li>
                                <li><a class="dropdown-item" href="{{route('shop.checkout')}}">Checkout</a></li>
                              </ul>
                        </li>
                    </ul>            </div>
                <!-- / Main Navigation-->
    
                <!-- Navbar Icons-->
                <ul class="list-unstyled mb-0 d-flex align-items-center">
    
                    <!-- Navbar Toggle Icon-->
                    <li class="d-inline-block d-lg-none">
                        <button
                            class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 d-flex align-items-center"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-menu-line ri-lg align-middle"></i>
                        </button>
                    </li>
                    <!-- /Navbar Toggle Icon-->
    
                    <!-- Navbar Search-->
                    <li class="ms-1 d-inline-block">
                        <button
                            class="btn btn-link px-2 text-decoration-none d-flex align-items-center"
                            data-pr-search>
                            <i class="ri-search-2-line ri-lg align-middle"></i>
                        </button>
                    </li>
                    <!-- /Navbar Search-->
    
                    <!-- Navbar Wishlist-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center"
                            href="#">
                            <i class="ri-heart-line ri-lg align-middle"></i>
                        </a>
                    </li>
                    <!-- /Navbar Wishlist-->
    
                    <!-- Navbar Login-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="btn btn-link px-2 text-decoration-none d-flex align-items-center"
                            href="#">
                            <i class="ri-user-line ri-lg align-middle"></i>
                        </a>
                    </li>
                    <!-- /Navbar Login-->
    
                    <!-- Navbar Cart-->
                    <li class="ms-1 d-inline-block position-relative">
                        <button
                            class="btn btn-link px-2 text-decoration-none d-flex align-items-center disable-child-pointer"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                            <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10"></i>
                           @if (Cart::count()>0)
                           <span class="fs-xs fw-bolder f-w-5 f-h-5 bg-orange rounded-lg d-block lh-1 pt-1 position-absolute top-0 end-0 z-index-20 mt-2 text-white">{{Cart::count()}}</span>
                           @endif
                        </button>
                    </li>
                    <!-- /Navbar Cart-->
    
                </ul>
                <!-- Navbar Icons-->
    
            </div>
        </div>
    </nav>
    <!-- / Navbar--> </div>    
        <!-- / Navbar-->
     <!-- Main Section-->
   
     @yield('content')
   
    <!-- / Main Section-->
    <!-- Footer -->
    <!-- Footer-->
    <footer class="bg-dark mt-5  ">
    
        <!-- Footer socials-->
        <div class="bg-light py-4">
            <div class="container d-flex justify-content-center align-items-center py-2">
                <p class="lead fw-bolder mb-0 lh-1">Find us online</p>
                <ul class="list-unstyled d-flex justify-content-start align-items-center mb-0 ms-3 lh-1">
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-instagram-fill ri-xl lh-1"></i></a></li>
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-facebook-fill ri-xl lh-1"></i></a></li>
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-twitter-fill ri-xl lh-1"></i></a></li>
                    <li class="mx-1 mb-0 lh-1"><a
                            class="text-muted text-decoration-none opacity-75-hover transition-all lh-1" href="#"><i
                                class="ri-snapchat-fill ri-xl lh-1"></i></a></li>
                </ul>
            </div>
        </div>    
        <!-- / Footer socials-->
    
        <!-- Instagram Display-->
        <div class="container pt-8">
            <div class="row g-2">
                <div class="d-none d-md-block col-md-4" data-aos="fade-in" data-aos-delay="150">
                    <picture>
                        <img class="img-fluid" src="/assets/images/instagram/instagram-1.jpg" alt="" data-zoomable>
                    </picture>
                </div>
                <div class="col-12 col-md-8" data-aos="fade-in" data-aos-delay="300">
                    <div class="row g-2">
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="/assets/images/instagram/instagram-2.jpg" alt="" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="/assets/images/instagram/instagram-3.jpg" alt="" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="/assets/images/instagram/instagram-4.jpg" alt="" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="/assets/images/instagram/instagram-5.jpg" alt="" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="/assets/images/instagram/instagram-6.jpg" alt="" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="/assets/images/instagram/instagram-7.jpg" alt="" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="/assets/images/instagram/instagram-8.jpg" alt="" data-zoomable>
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <img class="img-fluid" src="/assets/images/instagram/instagram-9.jpg" alt="" data-zoomable>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <p class="text-muted m-0">Follow us on Instragram <span class="text-lowercase">@Litris</span></p>
                <a class="text-link-border fw-bolder m-0 text-white" href="#">More On Instagram <i
                    class="ri-external-link-line align-bottom"></i></a>
            </div>
        </div>
        <!-- Instagram Display-->
        
        <!-- Info Bar-->
        <div class="container mt-7">
            <div class="row">
            
                <!-- Info box-->
                <div class="col-12 col-md-4 mb-3 mb-xxl-0 text-white" data-aos="fade-left">
                    <div class="border-white-opacity border-2 p-4 d-flex flex-column flex-lg-row justify-content-start align-items-start h-100">
                        <i class="ri-questionnaire-line ri-lg mb-3 mb-lg-0"></i>
                        <div class="ms-lg-4">
                            <p class="mb-1 lh-1 fw-bold">Customer Services</p>
                            <small class="text-muted"><a class="text-muted" href="#">Click here</a> to chat with our support team</small>
                        </div>
                    </div>
                </div>
                <!-- / Info box-->
            
                <!-- Info box-->
                <div class="col-12 col-md-4 mb-3 mb-xxl-0 text-white" data-aos="fade-left" data-aos-delay="250">
                    <div class="border-white-opacity border-2 p-4 d-flex flex-column flex-lg-row justify-content-start align-items-start h-100">
                        <i class="ri-truck-line ri-lg mb-3 mb-lg-0"></i>
                        <div class="ms-lg-4">
                            <p class="mb-1 lh-1 fw-bold">Free Delivery</p>
                            <small class="text-muted">Free standard delivery on all orders over $100</small>
                        </div>
                    </div>
                </div>
                <!-- / Info box-->
                
                <!-- Info box-->
                <div class="col-12 col-md-4 mb-3 mb-xxl-0 text-white" data-aos="fade-left" data-aos-delay="500">
                    <div class="border-white-opacity border-2 p-4 d-flex flex-column flex-lg-row justify-content-start align-items-start h-100">
                        <i class="ri-repeat-line ri-lg mb-3 mb-lg-0"></i>
                        <div class="ms-lg-4">
                            <p class="mb-1 lh-1 fw-bold">Returns</p>
                            <small class="text-muted">30 day money-back returns if you change your mind</small>
                        </div>
                    </div>
                </div>
                <!-- / Info box-->    
            
            </div>    </div>
        <!-- / Info Bar-->     
    
        <!-- Menus & Newsletter-->
        <div class="border-top-white-opacity py-7 mt-7 text-white">
            <div class="container" data-aos="fade-in">
                <div class="row my-4 flex-wrap">
        
                    <!-- Footer Nav-->
                    <nav class="col-6 col-md mb-4 mb-md-0">
                        <h6 class="mb-4 fw-bolder fs-6">Shop</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{route('shop.category')}}">Categorys</a></li>
                            
                        </ul>
                    </nav>
                    <!-- /Footer Nav-->
        
                    <!-- Footer Nav-->
                    <nav class="col-6 col-md mb-4 mb-md-0">
                        <h6 class="mb-4 fw-bolder fs-6">Company</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">About Us</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">Our Blog</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">FAQs</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="#">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- /Footer Nav-->
        
                    <!-- Footer Nav-->
                    <nav class="d-none d-md-block col-md">
                        <h6 class="mb-4 fw-bolder fs-6">Navigation</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{route('shop.index')}}">Register</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{route('shop.basket')}}">Cart</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{route('shop.checkout')}}">Checkout</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{route('shop.index')}}">Account</a></li>
                        </ul>
                    </nav>
                    <!-- /Footer Nav-->
        
                    <!-- Footer Contact-->
                    <div class="col-12 col-md-5">
                        <h6 class="mb-4 fw-bolder fs-6">Join Our Newsletter</h6>
                        <p class="opacity-75">Sign up to our newsletter and we'll email you a code worth 15%
                            off your first order. By subscribing to our mailing list you agree to our terms and conditions.</p>
                            <form
                            class="bg-white d-flex justify-content-start align-items-center border-dark-focus-within transition-all mt-4">
                            <div class="input-group m-0">
                                <input type="text" class="form-control d-flex flex-grow-1 border-0 bg-transparent py-3"
                                    placeholder="Enter your email" aria-label="Enter your email">
                                <span class="input-group-text bg-transparent border-0"><i
                                        class="ri-arrow-right-line align-middle"></i></span>
                            </div>
                        </form>
                    </div>
                    <!-- /Footer Contact-->
        
                </div>
                <div
                    class="border-top-white-opacity justify-content-between flex-column flex-md-row align-items-center d-flex pt-6 mt-6 px-0">
                    <p class="small opacity-75">&copy; 2024 Litris All Rights Reserved. </p>
                    <nav>
                        <ul class="list-unstyled">
                            <li class="d-inline-block me-1 bg-white rounded px-2 pt-1"><i class="pi pi-paypal pi-sm"></i></li>
                            <li class="d-inline-block me-1 bg-white rounded px-2 pt-1"><i class="pi pi-mastercard pi-sm"></i>
                            </li>
                            <li class="d-inline-block me-1 bg-white rounded px-2 pt-1"><i
                                    class="pi pi-american-express pi-sm"></i></li>
                            <li class="d-inline-block bg-white rounded px-2 pt-1"><i class="pi pi-visa pi-sm"></i></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Menus & Newsletter-->
    
    </footer>
    <!-- / Footer-->
    <!-- Offcanvas Imports-->
    <!-- Cart Offcanvas-->
    <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasCart">
      <div class="offcanvas-header d-flex align-items-center">
        <h5 class="offcanvas-title" id="offcanvasCartLabel">Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="d-flex flex-column justify-content-between w-100 h-100">
          <div>
    
            <div class="mt-4 mb-5">
              <p class="mb-2 fs-6"><i class="ri-truck-line align-bottom me-2"></i> 
              
              
              @if(Cart::total()< 100)
                    <span class="fw-bolder">${{100-Cart::total()}}</span> away from free delivery
                @else
                    Free delivery
                @endif
              </p>  
              <div class="progress f-h-1">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{Cart::total()<100?Cart::total()<100:100}}%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
    
            <!-- Cart Product-->
            @foreach(Cart::content() as $row)
            <div class="row mx-0 pb-4 mb-4 border-bottom">
              <div class="col-3">
                <picture class="d-block bg-light">
                  <img class="img-fluid" src="{{$row->options->img}}"
                    alt="">
                </picture>
              </div>
              <div class="col-9">
                <div>
                  <h6 class="justify-content-between d-flex align-items-start mb-2">
                    {{$row->name}}
                    <i class="ri-close-line"></i>
                  </h6>
                  <small class="d-block text-muted fw-bolder">Size: {{$row->options->has('size') ? $row->options->size : '-'}}</small>
                  <small class="d-block text-muted fw-bolder">Qty: {{$row->qty}}</small>
                </div>
                <p class="fw-bolder text-end m-0">${{$row->total}}</p>
              </div>
            </div>
            @endforeach
            <!-- Cart Product-->

    
          </div>
          <div class="border-top pt-3">
            <div class="d-flex justify-content-between align-items-center">
              <p class="m-0 fw-bolder">Subtotal</p>
              <p class="m-0 fw-bolder">${{Cart::subtotal()}}</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <p class="m-0 fw-bolder">Grand Total</p>
              <p class="m-0 fs-6">Inc ${{Cart::tax()}} sales tax</p>
              <p class="m-0 fw-bolder">${{Cart::total()}}</p>
            </div>
            <a href="{{route('shop.checkout')}}"
              class="btn btn-orange btn-orange-chunky mt-5 mb-2 d-block text-center">Checkout</a>
            <a href="{{route('shop.basket')}}"
              class="btn btn-dark fw-bolder d-block text-center transition-all opacity-50-hover">View Cart</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Review Offcanvas-->
    <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasReview">
      <div class="offcanvas-header d-flex align-items-center">
        <h5 class="offcanvas-title" id="offcanvasReviewLabel">Leave A Review</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <!-- Review Form -->
        <form>
          <div class="form-group mb-3 mt-2">
            <label class="form-label" for="formReviewName">Your Name</label>
            <input type="text" class="form-control" id="formReviewName" placeholder="Your Name">
          </div>
          <div class="form-group mb-3 mt-2">
            <label class="form-label" for="formReviewEmail">Your Email</label>
            <input type="text" class="form-control" id="formReviewEmail" placeholder="Your Email">
          </div>
          <div class="form-group mb-3 mt-2">
            <label class="form-label" for="formReviewTitle">Your Review Title</label>
            <input type="text" class="form-control" id="formReviewTitle" placeholder="Review Title">
          </div>
          <div class="form-group mb-3 mt-2">
            <label class="form-label" for="formReviewReview">Your Review</label>
            <textarea class="form-control" name="formReviewReview" id="formReviewReview" cols="30" rows="5"
              placeholder="Your Review"></textarea>
          </div>
          <button type="submit" class="btn btn-dark hover-lift hover-boxshadow">Submit Review</button>
        </form>
        <!-- / Review Form-->
      </div>
    </div>
    <!-- Search Overlay-->
    
        <search-component />
    
    <!-- Theme JS -->
    <!-- Vendor JS -->
    
    
    <!-- Theme JS -->
       @vite(['resources/js/theme.js'])
</div>
</body>

</html>