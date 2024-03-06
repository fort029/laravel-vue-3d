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
    
</head>
<body class="">

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
                                Menswear
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
                                                    <h6 class="dropdown-heading">Waterproof Layers</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Waterproof
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Insulated
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Down
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Softshell
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Casual
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Windproof
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Breathable
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Cleaning &
                                                                Proofing</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all"
                                                                href="./category.html">View All</a></li>
                                                    </ul>
                                            
                                                </div>
                                                <!-- /menu row-->
                                            
                                                <!-- menu row-->
                                                <div class="col col-lg-6">
                                                    <h6 class="dropdown-heading">Brands</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Lifestyle &
                                                                Casual</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Walking
                                                                Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Running
                                                                Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Military
                                                                Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Fabric Walking
                                                                Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Leather
                                                                Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Wellies</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Winter
                                                                Footwear</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all"
                                                                href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /menu row-->
                                            
                                            </div>                    </div>
                                        <!-- /Dropdown Menu Links Section-->
                    
                                        <!-- Dropdown Menu Images Section-->
                                        <div class="d-none d-lg-block col-lg-5">
                                            <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute" style="background-image: url(/assets/images/banners/banner-2.jpg);"></div>
                                        </div>
                                        <!-- Dropdown Menu Images Section-->
                                    </div>
                                </div>
                            </div>
                            <!-- / Menswear dropdown menu-->
                        </li>
                        <li class="nav-item me-lg-4 dropdown position-static">
                            <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Womenswear
                            </a>
                            <!-- Womenswear dropdown menu-->
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="container">
                                    <div class="row g-0">
                                        <!-- Dropdown Menu Links Section-->
                                        <div class="col-12 col-lg-7">
                                            <div class="row py-lg-5">
                                            
                                                <!-- menu row-->
                                                <div class="col col-lg-6 mb-5 mb-sm-0">
                                                    <h6 class="dropdown-heading">Waterproof Layers</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Waterproof
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Insulated
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Down
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Softshell
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Casual
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Windproof
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Breathable
                                                                Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Cleaning &
                                                                Proofing</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all"
                                                                href="./category.html">View All</a></li>
                                                    </ul>
                                            
                                                </div>
                                                <!-- /menu row-->
                                            
                                                <!-- menu row-->
                                                <div class="col col-lg-6">
                                                    <h6 class="dropdown-heading">Brands</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Lifestyle &
                                                                Casual</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Walking
                                                                Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Running
                                                                Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Military
                                                                Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Fabric Walking
                                                                Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Leather
                                                                Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Wellies</a>
                                                        </li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Winter
                                                                Footwear</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all"
                                                                href="./category.html">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /menu row-->
                                            
                                            </div>                    </div>
                                        <!-- /Dropdown Menu Links Section-->
                    
                                        <!-- Dropdown Menu Images Section-->
                                        <div class="d-none d-lg-block col-lg-5">
                                            <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute" style="background-image: url(/assets/images/banners/banner-4.jpg);"></div>
                                        </div>
                                        <!-- Dropdown Menu Images Section-->
                                    </div>
                                </div>
                            </div>
                            <!-- / Womenswear dropdown menu-->
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link fw-bolder py-lg-4" href="#">
                                Kidswear
                            </a>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link fw-bolder py-lg-4" href="#">
                                Sale Items
                            </a>
                        </li>
                        <li class="nav-item dropdown me-lg-4">
                            <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Demo Pages
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
                            <span
                                class="fs-xs fw-bolder f-w-5 f-h-5 bg-orange rounded-lg d-block lh-1 pt-1 position-absolute top-0 end-0 z-index-20 mt-2 text-white">2</span>
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
    <footer class="bg-dark mt-10  ">
    
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
                                    href="{{route('shop.category')}}">Menswear</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{route('shop.category')}}">Womenswear</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{route('shop.category')}}">Kidswear</a></li>
                            <li class="mb-2"><a class="text-decoration-none text-white opacity-75 opacity-25-hover transition-all"
                                    href="{{route('shop.category')}}">New Arrivals</a></li>
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
    <!-- Filters Offcanvas-->
    <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasFilters">
      <div class="offcanvas-header d-flex align-items-center">
        <h5 class="offcanvas-title" id="offcanvasFiltersLabel">Category Filters</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="d-flex flex-column justify-content-between w-100 h-100">
    
          <!-- Filters-->
          <div>
            <!-- Filter Category -->
            <div class="mb-4">
              <h2 class="mb-4 fs-6 mt-2 fw-bolder">Jacket Category</h2>
              <nav>
                <ul class="list-unstyled list-default-text">
                  <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Waterproof Jackets</span> <span class="text-muted ms-4">(21)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Down Jackets</span> <span class="text-muted ms-4">(13)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Windproof Jackets</span> <span class="text-muted ms-4">(18)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Hiking Jackets</span> <span class="text-muted ms-4">(25)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Climbing Jackets</span> <span class="text-muted ms-4">(11)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Trekking Jackets</span> <span class="text-muted ms-4">(19)</span></a>
                  </li>              <li class="mb-2"><a
                      class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                      href="#"><span><i class="ri-arrow-right-s-line align-bottom ms-n1"></i> Allround Jackets</span> <span class="text-muted ms-4">(24)</span></a>
                  </li>            </ul>
              </nav>
            </div>
            <!-- / Filter Category-->
    
            <!-- Price Filter -->
            <div class="py-4 widget-filter widget-filter-price border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-price" role="button" aria-expanded="false"
                aria-controls="filter-modal-price">
                Price
              </a>
              <div id="filter-modal-price" class="collapse">
                <div class="filter-price mt-6"></div>
                <div class="d-flex justify-content-between align-items-center mt-7">
                    <div class="input-group mb-0 me-2 border">
                        <span class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">$</span>
                        <input type="number" min="00" max="1000" step="1" class="filter-min form-control-sm border flex-grow-1 text-muted border-0">
                    </div>   
                    <div class="input-group mb-0 ms-2 border">
                        <span class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">$</span>
                        <input type="number" min="00" max="1000" step="1" class="filter-max form-control-sm flex-grow-1 text-muted border-0">
                    </div>                
                </div>          </div>
            </div>
            <!-- / Price Filter -->
    
            <!-- Brands Filter -->
            <div class="py-4 widget-filter border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-brands" role="button" aria-expanded="false"
                aria-controls="filter-modal-brands">
                Brands
              </a>
              <div id="filter-modal-brands" class="collapse">
                <div class="input-group my-3 py-1">
                  <input type="text" class="form-control py-2 filter-search rounded" placeholder="Search"
                    aria-label="Search">
                  <span class="input-group-text bg-transparent p-2 position-absolute top-2 end-0 border-0 z-index-20"><i
                      class="ri-search-2-line text-muted"></i></span>
                </div>
                <div class="simplebar-wrapper">
                  <div class="filter-options" data-pixr-simplebar>
                    <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-0">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-0">Adidas  <span
                                class="text-muted">(21)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-1">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-1">Asics  <span
                                class="text-muted">(13)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-2">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-2">Canterbury  <span
                                class="text-muted">(18)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-3">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-3">Converse  <span
                                class="text-muted">(25)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-4">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-4">Donnay  <span
                                class="text-muted">(11)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-5">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-5">Nike  <span
                                class="text-muted">(19)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-6">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-6">Millet  <span
                                class="text-muted">(24)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-7">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-7">Puma  <span
                                class="text-muted">(11)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-8">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-8">Reebok  <span
                                class="text-muted">(19)</span></label>
                    </div>                <div class="form-group form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="filter-brands-modal-9">
                        <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                            for="filter-brands-modal-9">Under Armour  <span
                                class="text-muted">(24)</span></label>
                    </div>              </div>
                </div>
              </div>
            </div>
            <!-- / Brands Filter -->
    
            <!-- Type Filter -->
            <div class="py-4 widget-filter border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-type" role="button" aria-expanded="false"
                aria-controls="filter-modal-type">
                Type
              </a>
              <div id="filter-modal-type" class="collapse">
                <div class="input-group my-3 py-1">
                  <input type="text" class="form-control py-2 filter-search rounded" placeholder="Search"
                    aria-label="Search">
                  <span class="input-group-text bg-transparent p-2 position-absolute top-2 end-0 border-0 z-index-20"><i
                      class="ri-search-2-line text-muted"></i></span>
                </div>
                <div class="filter-options">
                  <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-0">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-0">Slip On </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-1">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-1">Strap Up </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-2">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-2">Zip Up </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-3">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-3">Toggle </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-4">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-4">Auto </label>
                  </div>              <div class="form-group form-check mb-0">
                      <input type="checkbox" class="form-check-input" id="filter-type-modal-5">
                      <label class="form-check-label fw-normal text-body flex-grow-1 d-flex justify-content-between"
                          for="filter-type-modal-5">Click </label>
                  </div>            </div>
              </div>
            </div>
            <!-- / Type Filter -->
    
            <!-- Sizes Filter -->
            <div class="py-4 widget-filter border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-sizes" role="button" aria-expanded="false"
                aria-controls="filter-modal-sizes">
                Sizes
              </a>
              <div id="filter-modal-sizes" class="collapse">
                <div class="filter-options mt-3">
                  <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-0">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-0">6.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-1">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-1">7</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-2">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-2">7.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-3">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-3">8</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-4">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-4">8.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-5">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-5">9</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-6">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-6">9.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-7">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-7">10</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-8">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-8">10.5</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-9">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-9">11</label>
                  </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                      <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-10">
                      <label class="form-check-label fw-normal" for="filter-sizes-modal-10">11.5</label>
                  </div>            </div>
              </div>
            </div>
            <!-- / Sizes Filter -->
    
            <!-- Colour Filter -->
            <div class="py-4 widget-filter border-top">
              <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                data-bs-toggle="collapse" href="#filter-modal-colour" role="button" aria-expanded="false"
                aria-controls="filter-modal-colour">
                Colour
              </a>
              <div id="filter-modal-colour" class="collapse">
                <div class="filter-options mt-3">
                  <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-primary">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-0">
                      <label class="form-check-label" for="filter-colours-modal-0"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-success">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-1">
                      <label class="form-check-label" for="filter-colours-modal-1"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-danger">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-2">
                      <label class="form-check-label" for="filter-colours-modal-2"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-info">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-3">
                      <label class="form-check-label" for="filter-colours-modal-3"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-warning">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-4">
                      <label class="form-check-label" for="filter-colours-modal-4"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-dark">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-5">
                      <label class="form-check-label" for="filter-colours-modal-5"></label>
                  </div>              <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-secondary">
                      <input type="checkbox" class="form-check-color-input" id="filter-colours-modal-6">
                      <label class="form-check-label" for="filter-colours-modal-6"></label>
                  </div>            </div>
              </div>
            </div>
            <!-- / Colour Filter -->
          </div>
          <!-- / Filters-->
    
          <!-- Filter Button-->
          <div class="border-top pt-3">
            <a href="#" class="btn btn-dark mt-2 d-block hover-lift-sm hover-boxshadow">Done</a>
          </div>
          <!-- /Filter Button-->
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
    <section class="search-overlay">
        <div class="container search-container">
            <div class="py-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead lh-1 m-0 fw-bold">What are you looking for?</p>
                    <button class="btn btn-light btn-close-search"><i class="ri-close-circle-line align-bottom"></i> Close search</button>
                </div>
                <form>
                    <input type="text" class="form-control" id="searchForm" placeholder="Search by product or category name...">             
                </form>
                <div class="my-5">
                    <p class="lead fw-bolder">2 results found for <span class="fw-bold">"Waterproof Jacket"</span></p>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <!-- Card Product-->
                            <div class="card position-relative h-100 card-listing hover-trigger">
                                <div class="card-header">
                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                        <img class="w-100 img-fluid position-relative z-index-10" title="" src="/assets/images/products/product-1.jpg" alt="">
                                    </picture>
                                    <div class="card-actions">
                                        <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                        <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                            <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 text-center">
                                    <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
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
                            </div> <span class="small fw-bolder ms-2 text-muted"> 4.2 (123)</span>
                                    </div>
                                    <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                        href="./product.html">Mens Pennie II Waterproof Jacket</a>
                                        <p class="fw-bolder m-0 mt-2">$325.66</p>
                                </div>
                            </div>
                            <!--/ Card Product-->
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Card Product-->
                            <div class="card position-relative h-100 card-listing hover-trigger">
                                <div class="card-header">
                                    <picture class="position-relative overflow-hidden d-block bg-light">
                                        <img class="w-100 img-fluid position-relative z-index-10" title="" src="/assets/images/products/product-2.jpg" alt="">
                                    </picture>
                                    <div class="card-actions">
                                        <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                        <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                            <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                            <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 text-center">
                                    <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                        <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 70%">
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
                            </div> <span class="small fw-bolder ms-2 text-muted"> 4.5 (1289)</span>
                                    </div>
                                    <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                        href="./product.html">Mens Storm Waterproof Jacket</a>
                                        <p class="fw-bolder m-0 mt-2">$499.99</p>
                                </div>
                            </div>
                            <!--/ Card Product-->
                        </div>
                    </div>
                </div>
    
                <div class="bg-dark p-4 text-white">
                    <p class="lead m-0W">Didn't find what you are looking for? <a class="transition-all opacity-50-hover text-white text-link-border border-white pb-1 border-2" href="#">Send us a message.</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Theme JS -->
    <!-- Vendor JS -->
    
    
    <!-- Theme JS -->
       @vite(['resources/js/theme.js'])
</body>

</html>