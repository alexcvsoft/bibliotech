<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Jubilee - Free Online Course HTML Website Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
    
        <!-- Fonts
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        -->

        <!-- Plantilla -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('plantilla/icomoon/icomoon.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('plantilla/css/vendor.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plantilla/css/style.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
        <!-- Scripts -->
        <!-- {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} -->
 
        <!-- Styles -->
        @livewireStyles
    </head>
    
   

    <body class="font-sans antialiased">
        @livewireScripts
        <nav class="main-menu d-flex navbar navbar-expand-lg p-2 py-3 p-lg-4 py-lg-4 ">
            <div class="container-fluid">
                <div class="main-logo d-lg-none">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('plantilla/images/logo.png') }}" alt="logo" class="img-fluid">
                </a>
                </div>

                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header mt-3">
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body justify-content-between">
                    <div class="main-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('plantilla/images/logo.png') }}" alt="logo" class="img-fluid">
                    </a>
                    </div>

                    <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-3 mb-0">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link mx-2 active">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="pages"
                        data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu" aria-labelledby="pages">
                        <li><a href="about.html" class="dropdown-item">About Us<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="instructors.html" class="dropdown-item">Instructors<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="cart.html" class="dropdown-item">Cart<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="wishlist.html" class="dropdown-item">Wishlist<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="checkout.html" class="dropdown-item">Checkout<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="price-plan.html" class="dropdown-item">Price Plan<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="contact.html" class="dropdown-item">Contact<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="faqs.html" class="dropdown-item">FAQs<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="account.html" class="dropdown-item">Account<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="thank-you.html" class="dropdown-item">Thankyou<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="error.html" class="dropdown-item">Error 404<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="styles.html" class="dropdown-item">Styles<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="courses"
                        data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
                        <ul class="dropdown-menu" aria-labelledby="courses">
                        <li><a href="courses.html" class="dropdown-item">Course<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="courses-details.html" class="dropdown-item">Courses Detail<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="events"
                        data-bs-toggle="dropdown" aria-expanded="false">events</a>
                        <ul class="dropdown-menu" aria-labelledby="courses">
                        <li><a href="event.html" class="dropdown-item">event<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="event-details.html" class="dropdown-item">event details<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="blog"
                        data-bs-toggle="dropdown" aria-expanded="false">blog</a>
                        <ul class="dropdown-menu" aria-labelledby="blog">
                        <li><a href="blog.html" class="dropdown-item">blog<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="single-post.html" class="dropdown-item">single post<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="shop"
                        data-bs-toggle="dropdown" aria-expanded="false">shop</a>
                        <ul class="dropdown-menu" aria-labelledby="shop">
                        <li><a href="shop.html" class="dropdown-item">Shop<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="single-product.html" class="dropdown-item">Single Product<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="contact.html" class="nav-link mx-2">contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://templatesjungle.gumroad.com/l/jubilee-free-bootstrap-5-html-website-template-for-online-course"
                        class="nav-link mx-2 text-decoration-underline" target="_blank">GET PRO</a>
                    </li>
                    </ul>

                    <div class="d-none d-lg-flex align-items-center">
                    <ul class="d-flex  align-items-center list-unstyled m-0">
                        <li>
                        <a href="account.html" class="ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#user-circle" />
                            </svg> </a>
                        </li>
                        <li>
                        <a href="wishlist.html" class="ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#heart" />
                            </svg> </a>
                        </a>
                        </li>

                        <li class="">
                        <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                            aria-controls="offcanvasCart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#shopping-bag" />
                            </svg> </a>
                        </a>
                        </li>

                        <li>
                        <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                            aria-controls="offcanvasSearch">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#search" />
                            </svg> </a>
                        </a>
                        </li>

                    </ul>
                    </div>

                </div>
                </div>

            </div>
            <div class="container-fluid d-lg-none">
                <div class="d-flex  align-items-end mt-3">
                <ul class="d-flex  align-items-center list-unstyled m-0">
                    <li>
                    <a href="account.html" class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                        <use href="#user-circle" />
                        </svg> </a>
                    </li>
                    <li>
                    <a href="wishlist.html" class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                        <use href="#heart" />
                        </svg> </a>
                    </a>
                    </li>

                    <li class="">
                    <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                        aria-controls="offcanvasCart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                        <use href="#shopping-bag" />
                        </svg> </a>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                        aria-controls="offcanvasSearch">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                        <use href="#search" />
                        </svg> </a>
                    </a>
                    </li>

                </ul>
                </div>
            </div>
        </nav>

        <script src="{{ asset('plantilla/js/jquery-1.11.0.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
          crossorigin="anonymous"></script>
        <script src="{{ asset('plantilla/js/plugins.js') }}"></script>
        <script src="{{ asset('plantilla/js/script.js') }}"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <script src="{{ asset('plantilla/js/jquery-1.11.0.min.js') }}"></script>
    </body>

    @yield('content')
</html>
