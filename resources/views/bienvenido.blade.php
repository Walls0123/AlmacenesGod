<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link rel="stylesheet" href="/css/app2.css">



<script  src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfl5JsPWncvaMJd0icji5e0huUNWh2aEo&amp&libraries=geometry,places">
</script>
<script>
var searchInput = 'search_input';



$(document).ready(function () {
var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)),

{
    types: ['geocode'],
});
 autocomplete.setComponentRestrictions({'country': ['cl']});
google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var near_place = autocomplete.getPlace();
    // document.getElementById('loc_lat').value = near_place.geometry.location.lat();
    // document.getElementById('loc_long').value = near_place.geometry.location.lng();

    // document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
    // document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
});
});
// $(document).on('change', '#'+searchInput, function () {
// document.getElementById('latitude_input').value = '';
// document.getElementById('longitude_input').value = '';

// document.getElementById('latitude_view').innerHTML = '';
// document.getElementById('longitude_view').innerHTML = '';
// });
</script>

<body>
    <app-root _nghost-sc0="" ng-version="8.1.3" _nghost-serverapp-c0=""
      ><app-navbar _ngcontent-serverapp-c0="" _nghost-serverapp-c1=""
        ><header _ngcontent-serverapp-c1="" class="bg-orange">
          <!---->
          <nav
            _ngcontent-serverapp-c1=""
            class="navbar navbar-expand-lg bg-orange max-1440 p-0 pr-3 ng-star-inserted"
          >
            <a
              _ngcontent-serverapp-c1=""
              class="navbar-brand padding-logo mr-0"
              routerlink="/"
              href="/"
              ><app-logo _ngcontent-serverapp-c1="" _nghost-serverapp-c3=""
                ><!----><img
                  _ngcontent-serverapp-c3=""
                  alt="Mercado Bodegas"
                  src="/img/logo1.svg"
                  class="ng-star-inserted"
                /><!----></app-logo
              ></a
            ><button
              _ngcontent-serverapp-c1=""
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              class="navbar-toggler custom-toggler"
              data-target="#navbarSupportedContent"
              data-toggle="collapse"
              type="button"
            >
              <span _ngcontent-serverapp-c1="" class="navbar-toggler-icon"></span>
            </button>
            <div
              _ngcontent-serverapp-c1=""
              class="collapse navbar-collapse black"
              id="navbarSupportedContent"
            >
              <ul _ngcontent-serverapp-c1="" class="navbar-nav mr-auto"></ul>
              <div _ngcontent-serverapp-c1="" class="nav-item ml-3 mr-3">
                <a _ngcontent-serverapp-c1="" class="nav-link"
                  ><b _ngcontent-serverapp-c1="">Bodegas cerca tuyo</b>
                  <div _ngcontent-serverapp-c1="" class="line"></div
                ></a>
              </div>
              <div _ngcontent-serverapp-c1="" class="nav-item ml-3 mr-3">
                <a _ngcontent-serverapp-c1="" class="nav-link"
                  ><b _ngcontent-serverapp-c1="">Guía de tamaños</b>
                  <div _ngcontent-serverapp-c1="" class="line"></div
                ></a>
              </div>
              <div
                _ngcontent-serverapp-c1=""
                class="nav-item ml-3 mr-3 clickable text-right text-sm-left"
                id="telefonoContacto"
              >
                <a
                  _ngcontent-serverapp-c1=""
                  aria-expanded="false"
                  aria-haspopup="true"
                  class="nav-link"
                  data-toggle="dropdown"
                  id="contacto"
                  ><b _ngcontent-serverapp-c1="">Contacto</b>
                  <div _ngcontent-serverapp-c1="" class="line"></div
                ></a>
                <div
                  _ngcontent-serverapp-c1=""
                  aria-labelledby="contacto"
                  class="dropdown-menu dropdown-menu-right dropdown-custom"
                >
                  <a
                    _ngcontent-serverapp-c1=""
                    class="dropdown-item dropdown-item-custom"
                    href="#"
                    ><i _ngcontent-serverapp-c1="" class="far fa-envelope"></i>
                    contacto@mercadobodegas.net </a
                  ><a
                    _ngcontent-serverapp-c1=""
                    class="dropdown-item dropdown-item-custom"
                    href="#"
                    ><i _ngcontent-serverapp-c1="" class="fas fa-phone-alt"></i>
                    (+56) 955 - 9595 -599
                  </a>
                </div>
              </div>
              <!----><!----><mat-menu
                _ngcontent-serverapp-c1=""
                class="ng-tns-c5-0"
                ><!----></mat-menu
              >
            </div>
          </nav>
          <!----><!---->
        </header></app-navbar
      ><router-outlet _ngcontent-serverapp-c0=""></router-outlet
      ><app-inicio _nghost-serverapp-c7="" class="ng-star-inserted"
        ><section _ngcontent-serverapp-c7="" id="inicio-busqueda">
          <div _ngcontent-serverapp-c7="" class="container-fluid bg-orange">
            <div
              _ngcontent-serverapp-c7=""
              class="container pt-5 pb-5 text-center"
              id="barra de busqueda"
            >
              <h1 _ngcontent-serverapp-c7="" class="mt-5 mb-2">
                Todas las mini bodegas en un solo lugar.
              </h1>
              <h3 _ngcontent-serverapp-c7="" class="mb-4">
                Cotiza, compara y reserva sin compromiso.
              </h3>
              <div
                _ngcontent-serverapp-c7=""
                class="form-inline my-2 my-lg-0 row text-center"
              >
                <div _ngcontent-serverapp-c7="" class="col-sm-2"></div>
                <div
                  _ngcontent-serverapp-c7=""
                  class="col-sm-6 col-xs-12 pr-1 pl-0"
                >
                  <input
                    _ngcontent-serverapp-c7=""
                    autocorrect="off"
                    class="form-control w-100 ng-untouched ng-pristine ng-valid"
                    id="search_input"
                    name="busqueda"
                    placeholder="Ingresa dirección, calle, comuna, o ciudad."
                    autocomplete="off"
                  />
                </div>
                <div
                  _ngcontent-serverapp-c7=""
                  class="col-sm-2 col-xs-12 pl-0 pr-0"
                >
                  <button
                    _ngcontent-serverapp-c7=""
                    class="btn btn-block bg-black white my-2 my-sm-0"
                  >
                    Buscar
                  </button>
                </div>
                <div _ngcontent-serverapp-c7="" class="col-sm-2"></div>
              </div>
              <div _ngcontent-serverapp-c7="" class="mb-5"></div>
            </div>
          </div>
        </section>
        <section
          _ngcontent-serverapp-c7=""
          class="mt-5 mb-5 pt-4 bg-white"
          id="caracteristicas"
        >
          <div _ngcontent-serverapp-c7="" class="container-fluid text-center">
            <div _ngcontent-serverapp-c7="" class="container">
              <div _ngcontent-serverapp-c7="" class="row">
                <div _ngcontent-serverapp-c7="" class="text-center w-100">
                  <h3 _ngcontent-serverapp-c7="" class="mb-2">
                    Prueba nuestro buscador y verás lo fácil que es reservar sin
                    costo tu mini bodega.
                  </h3>
                </div>
                <p
                  _ngcontent-serverapp-c7=""
                  class="mt-2 mb-5 col-md-8 offset-md-2"
                >
                  MercadoBodegas te permite comparar y filtrar los resultados de
                  tu búsqueda según precios, tamaños y otras características.
                  Elige la mejor opción y luego reserva sin necesidad de
                  registrarte.
                </p>
              </div>
              <div _ngcontent-serverapp-c7="" class="row mt-4">
                <div
                  _ngcontent-serverapp-c7=""
                  class="d-flex flex-column col-sm-3"
                >
                  <i
                    _ngcontent-serverapp-c7=""
                    class="fas fa-search fa-5x mb-3"
                  ></i
                  ><span _ngcontent-serverapp-c7="" class="texto-ayuda">
                    Busca y selecciona una bodega
                  </span>
                </div>
                <div
                  _ngcontent-serverapp-c7=""
                  class="d-flex flex-column col-sm-3"
                >
                  <i
                    _ngcontent-serverapp-c7=""
                    class="fas fa-ticket-alt fa-5x mb-3"
                  ></i
                  ><span _ngcontent-serverapp-c7="" class="texto-ayuda">
                    Reserva gratis en línea
                  </span>
                </div>
                <div
                  _ngcontent-serverapp-c7=""
                  class="d-flex flex-column col-sm-3"
                >
                  <i
                    _ngcontent-serverapp-c7=""
                    class="fas fa-warehouse fa-5x mb-3"
                  ></i
                  ><span _ngcontent-serverapp-c7="" class="texto-ayuda">
                    Visita la bodega
                  </span>
                </div>
                <div
                  _ngcontent-serverapp-c7=""
                  class="d-flex flex-column col-sm-3"
                >
                  <i
                    _ngcontent-serverapp-c7=""
                    class="fas fa-people-carry fa-5x mb-3"
                  ></i
                  ><span _ngcontent-serverapp-c7="" class="texto-ayuda">
                    Lleva tus cosas
                  </span>
                </div>
              </div>
            </div>
          </div>
        </section></app-inicio
      ><app-footer _ngcontent-serverapp-c0="" _nghost-serverapp-c2=""
        ><footer _ngcontent-serverapp-c2="" class="bg-black white pb-1 pt-4">
          <div _ngcontent-serverapp-c2="" class="container">
            <div _ngcontent-serverapp-c2="" class="row mt-2">
              <div
                _ngcontent-serverapp-c2=""
                class="col-sm-4 mb-2 d-flex flex-column align-items-xs-center"
              >
                <h6 _ngcontent-serverapp-c2="">¿Necesitas ayuda?</h6>
                <h6 _ngcontent-serverapp-c2="" class="mt-2 mb-3 orange">
                  <a
                    _ngcontent-serverapp-c2=""
                    aria-expanded="false"
                    aria-haspopup="true"
                    class="link-border border-orange orange clickable"
                    data-toggle="dropdown"
                    id="contactoFooter"
                    ><b _ngcontent-serverapp-c2="">Contacto</b>
                    <div _ngcontent-serverapp-c2="" class="line"></div
                  ></a>
                  <div
                    _ngcontent-serverapp-c2=""
                    aria-labelledby="contacto"
                    class="dropdown-menu dropdown-menu-right dropdown-custom"
                  >
                    <a
                      _ngcontent-serverapp-c2=""
                      class="dropdown-item dropdown-item-custom"
                      href="#"
                      ><i _ngcontent-serverapp-c2="" class="far fa-envelope"></i>
                      contacto@mercadobodegas.net </a
                    ><a
                      _ngcontent-serverapp-c2=""
                      class="dropdown-item dropdown-item-custom"
                      href="#"
                      ><i _ngcontent-serverapp-c2="" class="fas fa-phone-alt"></i>
                      (+56) 955 - 9595 -599
                    </a>
                  </div>
                </h6>
              </div>
              <div
                _ngcontent-serverapp-c2=""
                class="col-sm-4 mb-2 d-flex flex-column align-items-xs-center"
              >
                <h6 _ngcontent-serverapp-c2="">Para dueños de Mini Bodegas</h6>
                <a _ngcontent-serverapp-c2="" class="mt-2" href="#"
                  ><span
                    _ngcontent-serverapp-c2=""
                    class="link-border border-white"
                    ><b _ngcontent-serverapp-c2="">Manual de uso</b></span
                  ></a
                ><a _ngcontent-serverapp-c2="" class="clickable"
                  ><span
                    _ngcontent-serverapp-c2=""
                    class="link-border border-white"
                    ><b _ngcontent-serverapp-c2="">Iniciar sesión</b></span
                  ></a
                >
              </div>
              <div
                _ngcontent-serverapp-c2=""
                class="col-sm-4 mb-2 d-flex flex-column align-items-xs-center"
              >
                <h6 _ngcontent-serverapp-c2="">MercadoBodegas en:</h6>
                <div _ngcontent-serverapp-c2="" class="mt-3">
                  <div _ngcontent-serverapp-c2="" class="row">
                    <div _ngcontent-serverapp-c2="" class="redes-link">
                      <i _ngcontent-serverapp-c2="" class="fab fa-facebook-f"></i>
                    </div>
                    <div _ngcontent-serverapp-c2="" class="redes-link">
                      <i _ngcontent-serverapp-c2="" class="fab fa-twitter"></i>
                    </div>
                    <div _ngcontent-serverapp-c2="" class="redes-link">
                      <i
                        _ngcontent-serverapp-c2=""
                        class="fab fa-linkedin-in"
                      ></i>
                    </div>
                    <div _ngcontent-serverapp-c2="" class="redes-link">
                      <i _ngcontent-serverapp-c2="" class="fab fa-youtube"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div _ngcontent-serverapp-c2="" class="row linea mt-3 mb-3"></div>
            <div _ngcontent-serverapp-c2="" class="row pb-2">
              <div _ngcontent-serverapp-c2="" class="col-md-4  mb-3">
                <app-logo
                  _ngcontent-serverapp-c2=""
                  class="logo-footer d-flex align-items-center justify-content-start align-items-xs-center align-items-only-sm-center"
                  _nghost-serverapp-c3=""
                  ><!----><!----><img
                    _ngcontent-serverapp-c3=""
                    alt="Mercado Bodegas"
                    src="/img/logoWhite.svg"
                    class="ng-star-inserted"
                /></app-logo>
              </div>
              <div
                _ngcontent-serverapp-c2=""
                class="col-md-4 d-flex align-items-center justify-content-end align-items-xs-center mb-2"
              ></div>
              <div
                _ngcontent-serverapp-c2=""
                class="col-md-4 d-flex align-items-center justify-content-center mb-2 text-xs-center"
              >
                <h6 _ngcontent-serverapp-c2="">
                  © MercadoBodegas 2019 | Derechos Reservados
                </h6>
              </div>
            </div>
          </div>
        </footer></app-footer
      ></app-root
    >
    <script src="runtime-es2015.d80d2c4942864f6ea1eb.js" type="module"></script>
    <script src="polyfills-es2015.fff1835e992680d7d716.js" type="module"></script>
    <script src="runtime-es5.31af2cb2742e117bd17c.js" nomodule=""></script>
    <script src="polyfills-es5.f339e85bd87fb024ff6a.js" nomodule=""></script>
    <script src="scripts.0c5273d269acccff6ee4.js"></script>
    <script src="main-es2015.f6e3d78ee8a91df272c8.js" type="module"></script>
    <script src="main-es5.d01a97e83a248f548d24.js" nomodule=""></script>

    <div
      class="cdk-live-announcer-element cdk-visually-hidden"
      aria-atomic="true"
      aria-live="polite"
    ></div>
    <script
      type="text/javascript"
      async=""
      defer=""
      id="agmGoogleMapsApiScript"
      src="https://maps.googleapis.com/maps/api/js?v=quarterly&amp;callback=agmLazyMapsAPILoader&amp;key=AIzaSyBfl5JsPWncvaMJd0icji5e0huUNWh2aEo&amp;libraries=places&amp;language=es"
    ></script>
    <div class="pac-container pac-logo" style="display: none;"></div>
  </body>

</html>
