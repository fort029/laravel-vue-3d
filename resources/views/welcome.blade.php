<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">Showroom</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                    <div class="d-flex">

                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main id="app">

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <img src="{{ asset('/images/belive.jpg') }}">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1><i>Believe in a better world</i></h1>
                            <p>“I believe we are here to do good. It is the responsibility of every human being to
                                aspire
                                to do something worthwhile, to make the world a better place than the one we found.”</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <img src="{{ asset('/images/matrix.jpg') }}">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><i>php? not that scary</i></h1>
                            <p>A popular general-purpose scripting language that is especially suited to web
                                development.
                                Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular
                                websites in the world</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <img src="{{ asset('/images/vscode.jpg') }}">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Full-Stack Developer</h1>
                            <p>“There are two ways of constructing a software design: One way is to make it so simple
                                that there are obviously no deficiencies, and the other way is to make it so complicated
                                that there are no obvious deficiencies. The first method is far more difficult.”</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container marketing">
            <div class="row" v-animateonscroll="{ enterClass: 'fadein', leaveClass: 'fadeout' }">
                <div class="col-12 text-center">
                    <h2>These technologies are no stranger to me</h2>
                </div>
            </div>
            <!-- Three columns of text below the carousel -->
            <div class="row" v-animateonscroll="{ enterClass: 'fadein', leaveClass: 'fadeout' }">
                <div class="col-lg-4 text-center">
                    <svg width="140" height="140" viewBox="0 0 50 52" xmlns="http://www.w3.org/2000/svg">
                        <title>Logomark</title>
                        <path
                            d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"
                            fill="#FF2D20" fill-rule="evenodd" />
                    </svg>

                    <h2>Laravel</h2>
                    <p style="height: 90px">The PHP Framework for Web Artisans. Laravel is a web application framework
                        with expressive, elegant syntax.</p>
                    <p><a class="btn btn-secondary" href="https://laravel.com/">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 text-center">
                    <svg class="logo" viewBox="0 0 128 128" width="140" height="140" data-v-e9cb7cd5="">
                        <path fill="#42b883" d="M78.8,10L64,35.4L49.2,10H0l64,110l64-110C128,10,78.8,10,78.8,10z"
                            data-v-e9cb7cd5=""></path>
                        <path fill="#35495e" d="M78.8,10L64,35.4L49.2,10H25.6L64,76l38.4-66H78.8z" data-v-e9cb7cd5="">
                        </path>
                    </svg>

                    <h2>Vue</h2>
                    <p style="height: 90px">The Progressive JavaScript Framework. An approachable, performant and
                        versatile framework for building web user interfaces.</p>
                    <p><a class="btn btn-secondary" href="https://vuejs.org/">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 text-center">
                    <svg width="140" height="140" fill="none" stroke-linecap="square"
                        stroke-miterlimit="10" version="1.1" viewBox="0 0 226.77 226.77"
                        xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(8.964 4.2527)" fill-rule="evenodd" stroke="#000"
                            stroke-linecap="butt" stroke-linejoin="round" stroke-width="4">
                            <path d="m63.02 200.61-43.213-174.94 173.23 49.874z" />
                            <path d="m106.39 50.612 21.591 87.496-86.567-24.945z" />
                            <path d="m84.91 125.03-10.724-43.465 43.008 12.346z" />
                            <path d="m63.458 38.153 10.724 43.465-43.008-12.346z" />
                            <path d="m149.47 62.93 10.724 43.465-43.008-12.346z" />
                            <path d="m84.915 125.06 10.724 43.465-43.008-12.346z" />
                        </g>
                    </svg>

                    <h2>Three</h2>
                    <p style="height: 90px">JavaScript 3D Library. The aim of the project is to create an easy-to-use,
                        lightweight, cross-browser, general-purpose 3D library.</p>
                    <p><a class="btn btn-secondary" href="https://threejs.org/">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row" v-animateonscroll="{ enterClass: 'fadein', leaveClass: 'fadeout' }">
                <div class="col-lg-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 118 94"
                        role="img">
                        <title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                            fill="currentColor"></path>
                    </svg>
                    <h2>Bootstrap</h2>
                    <p style="height: 90px">Build fast, responsive sites with Bootstrap. Powerful, extensible, and
                        feature-packed frontend toolkit.</p>
                    <p><a class="btn btn-secondary" href="https://threejs.org/">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 text-center">
                    <svg width="140" height="140" class="MuiBox-root css-15p9n5u"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" fill="white">
                        <path
                            d="M23.763 6.886c-.065-.053-.673-.512-1.954-.512-.32 0-.659.03-1.01.087-.248-1.703-1.651-2.533-1.716-2.57l-.345-.2-.227.328a4.596 4.596 0 0 0-.611 1.433c-.23.972-.09 1.884.403 2.666-.596.331-1.546.418-1.744.42H.752a.753.753 0 0 0-.75.749c-.007 1.456.233 2.864.692 4.07.545 1.43 1.355 2.483 2.409 3.13 1.181.725 3.104 1.14 5.276 1.14 1.016 0 2.03-.092 2.93-.266 1.417-.273 2.705-.742 3.826-1.391a10.497 10.497 0 0 0 2.61-2.14c1.252-1.42 1.998-3.005 2.553-4.408.075.003.148.005.221.005 1.371 0 2.215-.55 2.68-1.01.505-.5.685-.998.704-1.053L24 7.076l-.237-.19Z">
                        </path>
                        <path
                            d="M2.216 8.075h2.119a.186.186 0 0 0 .185-.186V6a.186.186 0 0 0-.185-.186H2.216A.186.186 0 0 0 2.031 6v1.89c0 .103.083.186.185.186Zm2.92 0h2.118a.185.185 0 0 0 .185-.186V6a.185.185 0 0 0-.185-.186H5.136A.185.185 0 0 0 4.95 6v1.89c0 .103.083.186.186.186Zm2.964 0h2.118a.186.186 0 0 0 .185-.186V6a.186.186 0 0 0-.185-.186H8.1A.185.185 0 0 0 7.914 6v1.89c0 .103.083.186.186.186Zm2.928 0h2.119a.185.185 0 0 0 .185-.186V6a.185.185 0 0 0-.185-.186h-2.119a.186.186 0 0 0-.185.186v1.89c0 .103.083.186.185.186Zm-5.892-2.72h2.118a.185.185 0 0 0 .185-.186V3.28a.186.186 0 0 0-.185-.186H5.136a.186.186 0 0 0-.186.186v1.89c0 .103.083.186.186.186Zm2.964 0h2.118a.186.186 0 0 0 .185-.186V3.28a.186.186 0 0 0-.185-.186H8.1a.186.186 0 0 0-.186.186v1.89c0 .103.083.186.186.186Zm2.928 0h2.119a.185.185 0 0 0 .185-.186V3.28a.186.186 0 0 0-.185-.186h-2.119a.186.186 0 0 0-.185.186v1.89c0 .103.083.186.185.186Zm0-2.72h2.119a.186.186 0 0 0 .185-.186V.56a.185.185 0 0 0-.185-.186h-2.119a.186.186 0 0 0-.185.186v1.89c0 .103.083.186.185.186Zm2.955 5.44h2.118a.185.185 0 0 0 .186-.186V6a.185.185 0 0 0-.186-.186h-2.118a.185.185 0 0 0-.185.186v1.89c0 .103.083.186.185.186Z">
                        </path>
                    </svg>

                    <h2>Docker</h2>
                    <p style="height: 90px">Develop faster. Run anywhere. Docker Hub is the world's easiest way to
                        create, manage,and deliver your team's container applications.</p>
                    <p><a class="btn btn-secondary" href="https://hub.docker.com/">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 text-center">
                    <svg width="140" height="140" viewBox="0 0 410 404" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M399.641 59.5246L215.643 388.545C211.844 395.338 202.084 395.378 198.228 388.618L10.5817 59.5563C6.38087 52.1896 12.6802 43.2665 21.0281 44.7586L205.223 77.6824C206.398 77.8924 207.601 77.8904 208.776 77.6763L389.119 44.8058C397.439 43.2894 403.768 52.1434 399.641 59.5246Z"
                            fill="url(#paint0_linear)" />
                        <path
                            d="M292.965 1.5744L156.801 28.2552C154.563 28.6937 152.906 30.5903 152.771 32.8664L144.395 174.33C144.198 177.662 147.258 180.248 150.51 179.498L188.42 170.749C191.967 169.931 195.172 173.055 194.443 176.622L183.18 231.775C182.422 235.487 185.907 238.661 189.532 237.56L212.947 230.446C216.577 229.344 220.065 232.527 219.297 236.242L201.398 322.875C200.278 328.294 207.486 331.249 210.492 326.603L212.5 323.5L323.454 102.072C325.312 98.3645 322.108 94.137 318.036 94.9228L279.014 102.454C275.347 103.161 272.227 99.746 273.262 96.1583L298.731 7.86689C299.767 4.27314 296.636 0.855181 292.965 1.5744Z"
                            fill="url(#paint1_linear)" />
                        <defs>
                            <linearGradient id="paint0_linear" x1="6.00017" y1="32.9999" x2="235"
                                y2="344" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#41D1FF" />
                                <stop offset="1" stop-color="#BD34FE" />
                            </linearGradient>
                            <linearGradient id="paint1_linear" x1="194.651" y1="8.81818" x2="236.076"
                                y2="292.989" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFEA83" />
                                <stop offset="0.0833333" stop-color="#FFDD35" />
                                <stop offset="1" stop-color="#FFA800" />
                            </linearGradient>
                        </defs>
                    </svg>

                    <h2>Vite</h2>
                    <p style="height: 90px">Next Generation Frontend Tooling. Get ready for a development environment
                        that can finally catch up with you.</p>
                    <p><a class="btn btn-secondary" href="https://threejs.org/">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider" v-animateonscroll="{ enterClass: 'fadein', leaveClass: 'fadeout' }">

            <div class="row featurette" v-animateonscroll="{ enterClass: 'fadein', leaveClass: 'fadeout' }">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Models <span class="text-muted"></span>3D</h2>
                    <p class="lead">Real-time dynamics 3D modeling using objects from Blender. Simple and fun thanks
                        to Vue. For example, a visual presentation of truck loading.</p>
                </div>
                <div class="col-md-5">
                    <loading-planning></loading-planning>
                </div>
            </div>

            <hr class="featurette-divider" v-animateonscroll="{ enterClass: 'fadein', leaveClass: 'fadeout' }">

            <div class="row featurette" v-animateonscroll="{ enterClass: 'fadein', leaveClass: 'fadeout' }">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Planning <span class="text-muted">2D.</span></h2>
                    <p class="lead">A useful tool for dynamically presenting graphic elements. Possibility of
                        interactive facility management. Easy implementation as a Vue component.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <house-direction></house-direction>
                </div>
            </div>

            <hr class="featurette-divider" v-animateonscroll="{ enterClass: 'fadein', leaveClass: 'fadeout' }">

            <div class="row featurette" v-animateonscroll="{ enterClass: 'fadein', leaveClass: 'fadeout' }">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Weekend <span class="text-muted">CountDown.</span>
                    </h2>
                    <p class="lead">A simple countdown to a designated date, in this case the start of the weekend.
                    </p>
                </div>
                <div class="col-md-5">
                    <count-down></count-down>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>For the log is long, and full off erors.</p>
        </footer>
    </main>
</body>

</html>
