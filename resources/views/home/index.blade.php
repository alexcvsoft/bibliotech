@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
<div>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <defs>
        <symbol id="facebook" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02" />
        </symbol>
        <symbol id="youtube" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
        </symbol>
        <symbol id="twitter" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23" />
        </symbol>
        <symbol id="linkedin" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z" />
        </symbol>
        <symbol id="fitness" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M20.57 14.86L22 13.43L20.57 12L17 15.57L8.43 7L12 3.43L10.57 2L9.14 3.43L7.71 2L5.57 4.14L4.14 2.71L2.71 4.14l1.43 1.43L2 7.71l1.43 1.43L2 10.57L3.43 12L7 8.43L15.57 17L12 20.57L13.43 22l1.43-1.43L16.29 22l2.14-2.14l1.43 1.43l1.43-1.43l-1.43-1.43L22 16.29z" />
        </symbol>
        <symbol id="laptop" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M4 6h16v10H4m16 2a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4c-1.11 0-2 .89-2 2v10a2 2 0 0 0 2 2H0v2h24v-2z" />
        </symbol>
        <symbol id="camera" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M4 4h3l2-2h6l2 2h3a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2m8 3a5 5 0 0 0-5 5a5 5 0 0 0 5 5a5 5 0 0 0 5-5a5 5 0 0 0-5-5m0 2a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3" />
        </symbol>
        <symbol id="handshake" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M21.71 8.71c1.25-1.25.68-2.71 0-3.42l-3-3c-1.26-1.25-2.71-.68-3.42 0L13.59 4H11C9.1 4 8 5 7.44 6.15L3 10.59v4l-.71.7c-1.25 1.26-.68 2.71 0 3.42l3 3c.54.54 1.12.74 1.67.74c.71 0 1.36-.35 1.75-.74l2.7-2.71H15c1.7 0 2.56-1.06 2.87-2.1c1.13-.3 1.75-1.16 2-2C21.42 14.5 22 13.03 22 12V9h-.59zM20 12c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-4.41l-3.28 3.28c-.31.29-.49.12-.6.01l-2.99-2.98c-.29-.31-.12-.49-.01-.6L5 15.41v-4l2-2V11c0 1.21.8 3 3 3s3-1.79 3-3h7zm.29-4.71L18.59 9H11v2c0 .45-.19 1-1 1s-1-.55-1-1V8c0-.46.17-2 2-2h3.41l2.28-2.28c.31-.29.49-.12.6-.01l2.99 2.98c.29.31.12.49.01.6" />
        </symbol>
        <symbol id="speakerphone" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.84-5 6.7v2.07c4-.91 7-4.49 7-8.77c0-4.28-3-7.86-7-8.77M16.5 12c0-1.77-1-3.29-2.5-4.03V16c1.5-.71 2.5-2.24 2.5-4M3 9v6h4l5 5V4L7 9z" />
        </symbol>
        <symbol id="pencil-box" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M19 19V5H5v14zm0-16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-2.3 6.35l-1 1l-2.05-2.05l1-1c.21-.22.56-.22.77 0l1.28 1.28c.22.21.22.56 0 .77M7 14.94l6.06-6.06l2.06 2.06L9.06 17H7z" />
        </symbol>
        <symbol id="tick-circle" viewBox="0 0 15 15">
          <path fill="currentColor" fill-rule="evenodd"
            d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0m7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768z"
            clip-rule="evenodd" />
        </symbol>
        <symbol id="clock" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M15.098 12.634L13 11.423V7a1 1 0 0 0-2 0v5a1 1 0 0 0 .5.866l2.598 1.5a1 1 0 1 0 1-1.732M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2m0 18a8 8 0 1 1 8-8a8.01 8.01 0 0 1-8 8" />
        </symbol>
        <symbol id="arrow-circle-right" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M15.71 12.71a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76a1 1 0 0 0-.21-.33l-3-3a1 1 0 0 0-1.42 1.42l1.3 1.29H9a1 1 0 0 0 0 2h3.59l-1.3 1.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0ZM22 12a10 10 0 1 0-10 10a10 10 0 0 0 10-10M4 12a8 8 0 1 1 8 8a8 8 0 0 1-8-8" />
        </symbol>
        <symbol id="search" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39M11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7" />
        </symbol>
        <symbol id="user-circle" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 2a10 10 0 0 0-7.35 16.76a10 10 0 0 0 14.7 0A10 10 0 0 0 12 2m0 18a8 8 0 0 1-5.55-2.25a6 6 0 0 1 11.1 0A8 8 0 0 1 12 20m-2-10a2 2 0 1 1 2 2a2 2 0 0 1-2-2m8.91 6A8 8 0 0 0 15 12.62a4 4 0 1 0-6 0A8 8 0 0 0 5.09 16A7.92 7.92 0 0 1 4 12a8 8 0 0 1 16 0a7.92 7.92 0 0 1-1.09 4" />
        </symbol>
        <symbol id="shopping-bag" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
        </symbol>
        <symbol id="heart" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M20.16 5A6.29 6.29 0 0 0 12 4.36a6.27 6.27 0 0 0-8.16 9.48l6.21 6.22a2.78 2.78 0 0 0 3.9 0l6.21-6.22a6.27 6.27 0 0 0 0-8.84m-1.41 7.46l-6.21 6.21a.76.76 0 0 1-1.08 0l-6.21-6.24a4.29 4.29 0 0 1 0-6a4.27 4.27 0 0 1 6 0a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 0a4.29 4.29 0 0 1 .08 6Z" />
        </symbol>
      </defs>
    </svg>

    <!-- <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div> -->

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
      <div class="offcanvas-header mt-3">
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-4">
            <span>Your Cart</span>
            <span class="badge bg-primary rounded-circle pt-2 text-white">3</span>
          </h4>

          <ul class="list-group mb-4">
            <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
              <div>
                <h6 class="my-0">Marketing Course</h6>
                <small class="text-body-secondary">Brief description</small>
              </div>
              <span class="text-body-secondary">$120</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
              <div>
                <h6 class="my-0">Strategy Course</h6>
                <small class="text-body-secondary">Brief description</small>
              </div>
              <span class="text-body-secondary">$80</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
              <div>
                <h6 class="my-0">Digital Course</h6>
                <small class="text-body-secondary">Brief description</small>
              </div>
              <span class="text-body-secondary">$50</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center py-3">
              <span class="fw-bold">Total (USD)</span>
              <strong>$250</strong>
            </li>
          </ul>

          <div class="d-grid my-5">
            <button class="btn btn-primary px-5 py-3" type="submit">Continue to checkout</button>
          </div>
        </div>
      </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
      aria-labelledby="Search">
      <div class="offcanvas-header mt-3">
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">

        <div class="order-md-last">
          <h4 class="text-primary text-uppercase mb-3">
            Search
          </h4>
          <div class="search-bar border rounded-2 border-dark-subtle">
            <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
              <input type="text" class="form-control border-0 bg-transparent" placeholder="Search Here" />
              <iconify-icon icon="tabler:search" class="fs-4 me-3"></iconify-icon>
            </form>
          </div>
        </div>
      </div>
    </div>

    <section id="top-nav">
      <div class="text-center px-md-3 py-md-2">
      </div>
    </section>

    
    <!-- SECCIÓN DE BARRA DE BÚSQUEDA -->
    <section id="barra-busqueda">
        <div class="col-md-6 pe-5 mt-5 mt-md-0">
            <div>
              <form id="form" class="d-flex align-items-center position-relative">
                    <input type="text" name="email" placeholder="¿Qué te gustaría leer hoy?"
                      class="form-control search-input">
                    <button class="btn btn-primary search-button">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M10 2a8 8 0 015.29 13.29l5.38 5.38-1.42 1.42-5.38-5.38A8 8 0 1110 2zm0 2a6 6 0 100 12 6 6 0 000-12z"/>
                      </svg>
                    </button>
              </form>
            </div>
        </div>
    </section>

 
  <!-- SECCION LIBROS -->
    <section id="teacher" class="padding-medium">
      <div class="container">
        <div class="text-center mb-5">
          <p class="texto-secundario">Conoce libros populares</p>
          <h2 class="display-6 fw-semibold">Nuevas Adquisiciones</h2>
        </div>

        <div class="row">
          <div class="col mb-5">
            <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
              <div class="imagen_portada zoom-effect rounded-3">
                <img src="{{ asset('img/portadas/Adicciones...sin_drogas.png') }}" class="imagen_portada" alt="image">
                <!-- <img src="{{ asset('img/portadas/Adicciones...sin_drogas.png') }}" class="img-fluid rounded-3" alt="image"> -->
                
                <ul class="social-links list-unstyled position-absolute">
                  <li>
                    <a href="#">
                      <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#facebook" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#twitter" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#instagram" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#linkedin" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body p-0">
                <div class="text-center mt-3">
                  <p class="fw-bold m-0">¿Adicciones... sin drogas? Las nuevas adicciones</p>
                  <p class="text-secondary m-0">Enrique Echeburúa</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect rounded-3">
                <!-- <img src="{{ asset('/img/portadas/Cannabis_y_salud_mito_a_la_evidencia_MSM.png') }}" class="img-fluid rounded-3" alt="image"> -->
                <img src="{{ asset('/img/portadas/Cannabis_y_salud_mito_a_la_evidencia_MSM.png') }}" class="img-fluid imagen_portada" alt="image">
                <ul class="social-links list-unstyled position-absolute">
                  <li>
                    <a href="#">
                      <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#facebook" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#twitter" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#instagram" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#linkedin" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body p-0">
                <div class="text-center mt-3">
                  <p class="fw-bold m-0">CANNABIS Y SALUD del mito a la evidencia</p>
                  <p class="text-secondary m-0">Mario Souza y Machorro</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect rounded-3">
                <img src="{{ asset('img/portadas/Cerebro_y_adiccion_DRR.png') }}" class="img-fluid rounded-3" alt="image">
                <ul class="social-links list-unstyled position-absolute">
                  <li>
                    <a href="#">
                      <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#facebook" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#twitter" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#instagram" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#linkedin" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body p-0">

                <div class="text-center mt-3">
                  <p class="fw-bold m-0">Cerebro y adicción Neurobiología del refuerzo</p>
                  <p class="text-secondary m-0">Diego Redolar Ripoll</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect rounded-3">
                <img src="{{ asset('img/portadas/Guía_metodológica.png') }}" class="img-fluid rounded-3" alt="image">
                <ul class="social-links list-unstyled position-absolute">
                  <li>
                    <a href="#">
                      <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#facebook" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#twitter" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#instagram" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#linkedin" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body p-0">

                <div class="text-center mt-3">
                  <p class="fw-bold m-0">GUÍA METODOLÓGICA ELABORACIÓN Y ACTUALIZACIÓN DE PROGRAMAS MUNICIPALES DE DESARROLLO URBANO</p>
                  <p class="text-secondary m-0">Alejandro Marambio Castillo</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect rounded-3">
                <img src="{{ asset('img/portadas/Guía_práctica_de_contabilidad_para_PYMES_FSMGC.png') }}" class="img-fluid rounded-3" alt="image">
                <ul class="social-links list-unstyled position-absolute">
                  <li>
                    <a href="#">
                      <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#facebook" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#twitter" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#instagram" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                        <use xlink:href="#linkedin" class="text-white"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body p-0">

                <div class="text-center mt-3">
                  <p class="fw-bold m-0">Guía práctica de contabilidad para PYMES</p>
                  <p class="text-secondary m-0">Fernando Sánchez</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- FIN DE SECCION LIBROS -->

    <!-- SECCION CATEGORIAS -->
    <section id="category">
      <div class="container ">
        <div class="d-md-flex justify-content-between align-items-center">
          <div>
            <p class="text-secondary ">Pick your niche and get started</p>
            <h2 class="display-6 fw-semibold">Popular Categories</h2>
          </div>
          <div class="mt-4 mt-md-0">
            <a href="#" class="btn btn-primary px-5 py-3">View all categories</a>
          </div>
        </div>
        <div class="row g-md-3 mt-2">
          <div class="col-md-4">
            <div class="primary rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                  <use href="#pencil-box" class="svg-primary" />
                </svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">Graphic Design</p>
                  <p class="category-paragraph m-0">39 courses</p>
                </div>
              </div>
            </div>
            <div class="tertiary rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                  <use href="#speakerphone" class="svg-tertiary" />
                </svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">SEO & Marketing</p>
                  <p class="category-paragraph m-0">24 courses</p>
                </div>
              </div>
            </div>
            <div class="secondary rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                  <use href="#handshake" class="svg-secondary" />
                </svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">Business & Finance</p>
                  <p class="category-paragraph m-0">16 courses</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="gray rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                  <use href="#camera" class="svg-gray" />
                </svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">Video & Photography</p>
                  <p class="category-paragraph m-0">39 courses</p>
                </div>
              </div>
            </div>
            <div class="secondary rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                  <use href="#laptop" class="svg-secondary" />
                </svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">Computer Science</p>
                  <p class="category-paragraph m-0">16 courses</p>
                </div>
              </div>
            </div>
            <div class="tertiary rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                  <use href="#fitness" class="svg-tertiary" />
                </svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">Health & Fitness</p>
                  <p class="category-paragraph m-0">24 courses</p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="tertiary rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                  <use href="#speakerphone" class="svg-tertiary" />
                </svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">SEO & Marketing</p>
                  <p class="category-paragraph m-0">24 courses</p>
                </div>
              </div>
            </div>
            <div class="primary rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                  <use href="#pencil-box" class="svg-primary" />
                </svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">Graphic Design</p>
                  <p class="category-paragraph m-0">39 courses</p>
                </div>
              </div>
            </div>
            <div class="gray rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                  <use href="#pencil-box" class="svg-gray" />
                </svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">Graphic Design</p>
                  <p class="category-paragraph m-0">39 courses</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- FIN DE SECCION CATEGORIAS -->

    <!-- SECCION CURSOS -->
<section id="courses" class="padding-medium">
      <div class="container">
        <div class="text-center mb-5">
          <p class="text-secondary">Algo de lo mas popular</p>
          <h2 class="display-6 fw-semibold">Explora nuestro catalogo </h2>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <div class="z-1 position-absolute m-4">
              <span class="badge text-white bg-secondary">New</span>
            </div>
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="courses-details.html"><img src= "{{ asset('plantilla/images/item1.jpg') }}" class="img-fluid rounded-3" alt="image"></a>
             
              <div class="card-body p-0">

                <div class="d-flex justify-content-between my-3">
                  <p class="text-black-50 fw-bold text-uppercase m-0">NUEVAS ADQUISIONES</p>
                  <div class="d-flex align-items-center">
                    <svg width="20" height="20">
                      <use xlink:href="#clock" class="text-black-50"></use>
                    </svg>
                    <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                  </div>
                </div>

                <a href="courses-details.html">
                  <h5 class="course-title py-2 m-0">LIBRO 1</h5>
                </a>

                <div class="card-text">
                  <span class="rating d-flex align-items-center mt-3">
                    <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  </span>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <div class="z-1 position-absolute m-4">
              <span class="badge text-white bg-secondary">New</span>
            </div>
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="courses-details.html"><img src= "{{ asset('plantilla/images/item2.jpg') }}" class="img-fluid rounded-3" alt="image"></a>
              <div class="card-body p-0">

                <div class="d-flex justify-content-between my-3">
                  <p class="text-black-50 fw-bold text-uppercase m-0">NUEVAS ADQUISIONES</p>
                  <div class="d-flex align-items-center">
                    <svg width="20" height="20">
                      <use xlink:href="#clock" class="text-black-50"></use>
                    </svg>
                    <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                  </div>
                </div>

                <a href="courses-details.html">
                  <h5 class="course-title py-2 m-0">LIBRO 2</h5>
                </a>

                <div class="card-text">
                  <span class="rating d-flex align-items-center mt-3">
                    <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  </span>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <!-- <div class="z-1 position-absolute m-4">
              <span class="badge text-white bg-secondary">New</span>
            </div> -->
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="courses-details.html"><img src= "{{ asset('plantilla/images/item3.jpg') }}" class="img-fluid rounded-3" alt="image"></a>
              <div class="card-body p-0">

                <div class="d-flex justify-content-between my-3">
                  <p class="text-black-50 fw-bold text-uppercase m-0">NUEVAS ADQUISIONES</p>
                  <div class="d-flex align-items-center">
                    <svg width="20" height="20">
                      <use xlink:href="#clock" class="text-black-50"></use>
                    </svg>
                    <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                  </div>
                </div>

                <a href="courses-details.html">
                  <h5 class="course-title py-2 m-0">LIBRO 3</h5>
                </a>

                <div class="card-text">
                  <span class="rating d-flex align-items-center mt-3">
                    <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  </span>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <div class="z-1 position-absolute m-4">
              <span class="badge text-white bg-secondary">Sale</span>
            </div>
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="courses-details.html"><img src= "{{ asset('plantilla/images/item4.jpg') }}" class="img-fluid rounded-3" alt="image"></a>
              <div class="card-body p-0">

                <div class="d-flex justify-content-between my-3">
                  <p class="text-black-50 fw-bold text-uppercase m-0">NUEVAS ADQUISIONES</p>
                  <div class="d-flex align-items-center">
                    <svg width="20" height="20">
                      <use xlink:href="#clock" class="text-black-50"></use>
                    </svg>
                    <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                  </div>
                </div>

                <a href="courses-details.html">
                  <h5 class="course-title py-2 m-0">LIBRO 5</h5>
                </a>

                <div class="card-text">
                  <span class="rating d-flex align-items-center mt-3">
                    <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  </span>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <!-- <div class="z-1 position-absolute m-4">
              <span class="badge text-white bg-secondary">New</span>
            </div> -->
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="courses-details.html"><img src= "{{ asset('plantilla/images/item5.jpg') }}" class="img-fluid rounded-3" alt="image"></a>
              <div class="card-body p-0">

                <div class="d-flex justify-content-between my-3">
                  <p class="text-black-50 fw-bold text-uppercase m-0">NUEVAS ADQUISIONES</p>
                  <div class="d-flex align-items-center">
                    <svg width="20" height="20">
                      <use xlink:href="#clock" class="text-black-50"></use>
                    </svg>
                    <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                  </div>
                </div>

                <a href="courses-details.html">
                  <h5 class="course-title py-2 m-0">LIBRO 6</h5>
                </a>

                <div class="card-text">
                  <span class="rating d-flex align-items-center mt-3">
                    <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  </span>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <div class="z-1 position-absolute m-4">
              <span class="badge text-white bg-secondary">New</span>
            </div>
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="courses-details.html"><img src= "{{ asset('plantilla/images/item6.jpg') }}" class="img-fluid rounded-3" alt="image"></a>
              <div class="card-body p-0">

                <div class="d-flex justify-content-between my-3">
                  <p class="text-black-50 fw-bold text-uppercase m-0">NUEVAS ADQUISIONES</p>
                  <div class="d-flex align-items-center">
                    <svg width="20" height="20">
                      <use xlink:href="#clock" class="text-black-50"></use>
                    </svg>
                    <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                  </div>
                </div>

                <a href="courses-details.html">
                  <h5 class="course-title py-2 m-0">LIBRO 7</h5>
                </a>

                <div class="card-text">
                  <span class="rating d-flex align-items-center mt-3">
                    <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  </span>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <!-- <div class="z-1 position-absolute m-4">
              <span class="badge text-white bg-secondary">New</span>
            </div> -->
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="courses-details.html"><img src= "{{ asset('plantilla/images/item7.jpg') }}" class="img-fluid rounded-3" alt="image"></a>
              <div class="card-body p-0">

                <div class="d-flex justify-content-between my-3">
                  <p class="text-black-50 fw-bold text-uppercase m-0">NUEVAS ADQUISIONES</p>
                  <div class="d-flex align-items-center">
                    <svg width="20" height="20">
                      <use xlink:href="#clock" class="text-black-50"></use>
                    </svg>
                    <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                  </div>
                </div>

                <a href="courses-details.html">
                  <h5 class="course-title py-2 m-0">LIBRO 8</h5>
                </a>

                <div class="card-text">
                  <span class="rating d-flex align-items-center mt-3">
                    <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  </span>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <div class="z-1 position-absolute m-4">
              <span class="badge text-white bg-secondary">Sale</span>
            </div>
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="courses-details.html"><img src= "{{ asset('plantilla/images/item8.jpg') }}" class="img-fluid rounded-3" alt="image"></a>
              <div class="card-body p-0">

                <div class="d-flex justify-content-between my-3">
                  <p class="text-black-50 fw-bold text-uppercase m-0">NUEVAS ADQUISIONES</p>
                  <div class="d-flex align-items-center">
                    <svg width="20" height="20">
                      <use xlink:href="#clock" class="text-black-50"></use>
                    </svg>
                    <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                  </div>
                </div>

                <a href="courses-details.html">
                  <h5 class="course-title py-2 m-0">LIBRO 10</h5>
                </a>

                <div class="card-text">
                  <span class="rating d-flex align-items-center mt-3">
                    <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  </span>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-4">
          <a href="courses.html" class="btn btn-primary px-5 py-3">Todas las categorias</a>
        </div>
      </div>
    </section>
    <!-- FIN DE SECCION CURSOS -->

         <!-- SECCION RESEÑAS -->
         <section id="testimonial" class="padding-medium bg-primary-subtle">
      <div class="container">
        <div class="text-center mb-4">
          <p class="text-secondary ">Lo que los estudiantes dicen acerca</p>
          <h2 class="display-6 fw-semibold">Reseñas</h2>
        </div>
        <div class="row">
          <div class="offset-md-1 col-md-10">
            <div class="swiper testimonial-swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide pe-md-5">
                  <div class="my-4">
                    <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                      ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                      nunc sapien egestas at cursus. ”</p>
                    <div class="row">
                      <div class="col-3"> <img src="{{ asset('plantilla/images/reviwer1.jpg') }}" alt="img" class="img-fluid rounded-circle">
                      
                      </div>
                      <div class="col-9">
                        <h5 class="m-0 mt-2">Recco Gracia</h5>
                        <p class="text-muted">Web Developer</p>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide pe-md-5">
                  <div class="my-4">
                    <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                      ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                      nunc sapien egestas at cursus. ”</p>
                    <div class="row">
                      <div class="col-3"> <img src="{{ asset('plantilla/images/reviwer2.jpg') }}" alt="img" class="img-fluid rounded-circle">
                      </div>
                      <div class="col-9">
                        <h5 class="m-0 mt-2">Bicky Yeal</h5>
                        <p class="text-muted">Web Developer</p>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide pe-md-5">
                  <div class="my-4">
                    <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                      ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                      nunc sapien egestas at cursus. ”</p>
                    <div class="row">
                      <div class="col-3"> <img src="{{ asset('plantilla/images/reviwer3.jpg') }}" alt="img" class="img-fluid rounded-circle">
                      </div>
                      <div class="col-9">
                        <h5 class="m-0 mt-2">Lilly Will</h5>
                        <p class="text-muted">Web Developer</p>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide pe-md-5">
                  <div class="my-4">
                    <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                      ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                      nunc sapien egestas at cursus. ”</p>
                    <div class="row">
                      <div class="col-3"> <img src="{{ asset('plantilla/images/reviwer1.jpg') }}" alt="img" class="img-fluid rounded-circle">
                      </div>
                      <div class="col-9">
                        <h5 class="m-0 mt-2">Recco Gracia</h5>
                        <p class="text-muted">Web Developer</p>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide pe-md-5">
                  <div class="my-4">
                    <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                      ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                      nunc sapien egestas at cursus. ”</p>
                    <div class="row">
                      <div class="col-3"> <img src="{{ asset('plantilla/images/reviwer2.jpg') }}" alt="img" class="img-fluid rounded-circle">
                      </div>
                      <div class="col-9">
                        <h5 class="m-0 mt-2">Recco Gracia</h5>
                        <p class="text-muted">Web Developer</p>
                      </div>

                    </div>
                  </div>
                </div>

              </div>

              <div class="swiper-pagination"></div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FIN DE SECCION RESEÑAS -->

    <section id="points" class="padding-medium pt-0">
      <div class="container">
        <div class="text-center">
          <p class="text-secondary ">What features we provide</p>
          <h2 class="display-6 fw-semibold">Core Features</h2>
        </div>
        <div class="row align-items-center mt-5">
          <div class="col-md-6 pe-md-5">

            <div class="d-flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#tick-circle" class="text-secondary" />
              </svg>
              <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
            </div>
            <div class="d-flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#tick-circle" class="text-secondary" />
              </svg>
              <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
            </div>
            <div class="d-flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#tick-circle" class="text-secondary" />
              </svg>
              <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
            </div>
            <div class="d-flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#tick-circle" class="text-secondary" />
              </svg>
              <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
            </div>

          </div>
          <div class="col-md-6 pe-md-5">

            <div class="d-flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#tick-circle" class="text-secondary" />
              </svg>
              <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
            </div>
            <div class="d-flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#tick-circle" class="text-secondary" />
              </svg>
              <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
            </div>
            <div class="d-flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#tick-circle" class="text-secondary" />
              </svg>
              <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
            </div>
            <div class="d-flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#tick-circle" class="text-secondary" />
              </svg>
              <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="register">
      <div class="container padding-medium">
        <div class="row align-items-center">
          <div class="offset-md-1 col-md-5 ">
            <div>
              <h2 class="display-6 fw-semibold">Subscribe and get 20% OFF on your first online course </h2>
              <p class="text-secondary ">Sign Up for our newsletter and never miss any offers</p>
            </div>
          </div>
          <div class="col-md-5">
            <form id="form">
              <input type="email" name="email" placeholder="Write Your Email Address*"
                class="form-control bg-white border-0 rounded-4 shadow-none rounded-pill text-center px-4 py-3 w-100 mb-4">
              <div class="d-grid">
                <button class="btn btn-primary px-5 py-3"> Get Started now</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

    
  </body> 
</div>
@endsection