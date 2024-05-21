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
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" -->
        <link rel="stylesheet" type="text/css" href="{{ asset('plantilla/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plantilla/css/vendor.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plantilla/css/style.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&    =swap" rel="stylesheet">
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
                    <img src="{{ asset('img/logo2.svg') }}" alt="logo" class="img-fluid">
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
                        <img src="{{ asset('img/logo2.svg') }}" alt="logo" class="img-fluid">
                    </a>
                    </div>

                    <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-3 mb-0">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link mx-2 active">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-2 align-items-center" role="button" id="pages"
                        aria-expanded="false">Catálogo</a>
                        {{-- <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="pages"
                        data-bs-toggle="dropdown" aria-expanded="false">Autores</a> --}}
                        {{-- <ul class="dropdown-menu" aria-labelledby="pages">
                        <li><a href="about.html" class="dropdown-item">Categorías<span
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
                        </ul> --}}
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-2 align-items-center" role="button" id="courses"
                        aria-expanded="false">Autores</a>
                        {{-- <ul class="dropdown-menu" aria-labelledby="courses">
                        <li><a href="courses.html" class="dropdown-item">Course<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="courses-details.html" class="dropdown-item">Courses Detail<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        </ul> --}}
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link mx-2 align-items-center" role="button" id="events"
                        aria-expanded="false">Colecciones</a>
                        {{-- <ul class="dropdown-menu" aria-labelledby="courses">
                        <li><a href="event.html" class="dropdown-item">event<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        <li><a href="event-details.html" class="dropdown-item">event details<span
                                class="badge bg-secondary text-white ms-2">PRO</span></a></li>
                        </ul> --}}
                    </li>

                   {{--  <li class="nav-item">
                        <a href="contact.html" class="nav-link mx-2">contact</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="#"
                        class="nav-link mx-2 text-decoration-underline" target="_blank">Iniciar Sesión</a>
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

    <footer id="footer">
        <div class="container padding-medium ">
          <div class="row">
            <div class="col-sm-6 col-lg-4 my-3">
              <div class="footer-menu">
                <a href="{{ route('home') }}">
                  <img src="{{ asset('img/logo2.svg') }}" alt="logo" class="img-fluid">
                </a>
                <div class="social-links mt-4">
                  <ul class="d-flex list-unstyled ">
                    <li class="me-4">
                      <a href="#">
                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                          <use xlink:href="#facebook"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="me-4">
                      <a href="#">
                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                          <use xlink:href="#twitter"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="me-4">
                      <a href="#">
                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                          <use xlink:href="#instagram"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="me-4">
                      <a href="#">
                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                          <use xlink:href="#linkedin"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="me-4">
                      <a href="#">
                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                          <use xlink:href="#youtube"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-2 my-3">
              <div class="footer-menu">
                <h5 class=" fw-bold mb-4">Sobre</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">Home</a>
                  </li>
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">About us</a>
                  </li>
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">Courses</a>
                  </li>
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">Blogs</a>
                  </li>
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-2 my-3">
              <div class="footer-menu">
                <h5 class=" fw-bold mb-4">Dirección y Teléfono</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">How It Works</a>
                  </li>
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">Pricing</a>
                  </li>
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">Promotion</a>
                  </li>
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">Affilation</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-2 my-3">
              <div class="footer-menu">
                <h5 class=" fw-bold mb-4">Contáctanos</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">contact@yourcompany</a>
                  </li>
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">+110 4587 2445</a>
                  </li>
                  <li class="menu-item mb-2">
                    <a href="#" class="footer-link">New York, USA</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
  
      <div id="footer-bottom">
        <hr class="text-black-50">
        <div class="container">
          <div class="row py-3">
            <div class="col-md-6 copyright">
              <p>© 2024 TemplatesJungle. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
              <p>Free HTML Template by: <a href="https://templatesjungle.com/" target="_blank" class="fw-bold">
                  TemplatesJungle</a> Distributed by: <a href="https://themewagon.com" target="_blank" class="fw-bold">
                    ThemeWagon
                  </a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- <script src="js/jquery-1.11.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
      <script src="js/plugins.js"></script>
      <script src="js/script.js"></script>
      <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>-->


</html>
