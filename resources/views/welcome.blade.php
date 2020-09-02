<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <div class="seccion headerbar1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <img class="img-fluid" src="{{ asset('img/icons/home.svg') }}" alt="">
                        </a>
                        <div class="navbar-collapse my-2 my-lg-0" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto"></ul>
                            <form class="form-inline my-2 my-lg-0">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('login') }}">
                                            <img class="img-fluid" src="{{ asset('img/icons/tablet-editar.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <img class="img-fluid" src="{{ asset('img/icons/carrito.svg') }}" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion headerbar2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <img class="img-fluid" src="{{ asset('img/logos/kromasol-1.svg') }}" alt="">
                        </a>
                        <div class="my-2 my-lg-0" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <h3 class="text-white">LUIS ALBERTO ARELLANO</h3>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <select name="" id="">
                                            <option value="">Español</option>
                                        </select>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion contenido">
        <div class="container">


            <div class="row links">
                <div class="col-md-4 col-sm-6 left">
                    <ul>
                        <li>
                            <img src="{{ asset('img/icons/k.svg') }}" alt="">CONOCE MÁS<span class="img-fluid float-right">></span>
                        </li>
                        <li>
                            <img src="{{ asset('img/icons/editar.svg') }}" alt="">REGÍSTRATE<span class="img-fluid float-right">></span>
                        </li>
                        <li>
                            <img src="{{ asset('img/icons/carrito2.svg') }}" alt="">COMPRAS<span class="img-fluid float-right">></span>
                        </li>
                        <li>
                            <img class="img-fluid" src="{{ asset('img/varios/guarda-comparte.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 right col-sm-6">
                    <img class="img-fluid img i1" src="{{ asset('img/varios/luis.png') }}" alt="">
                    <img class="img-fluid img i2" src="{{ asset('img/varios/banner.png') }}" alt="">
                </div>
            </div>


            <div class="row una-gran-familia">
                <div class="col-md-12 header">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="display-4 titulo2">UNA <span>GRAN FAMILIA</span> DE PRODUCTOS</h1>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="{{ asset('img/varios/una-gran-familia-de-productos.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mucha-actitud">
                    <h5 class="titulo1">NUESTROS PRODUCTOS TIENEN MUCHA ACTITUD</h5>
                    <p class="parrafos p1 parrafo1"><span>Están clasificados en cuatro familias:</span> energía, digestión, control de peso y antioxidantes. Han sido diseñados con increíbles sabores, fabricados en laboratorios certificados y con ingredientes de primera calidad.</p>
                    <p class="parrafos p2 parrafo2">Contribuyen a la mejora de distintas necesidades, porque PENSAMOS EN TODOS LOS ESTILOS DE VIDA.</p>
                </div>
                <div class="col-md-12 presentacion">
                    <div class="row">
                        <div class="col-md-6 left">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <img class="img-fluid" src="{{ asset('img/varios/sobres-individuales.png') }}" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12 alignVertical">
                                    <p class="d-inline titulo3">PRESENTACIÓN EN SOBRES INDIVIDUALES</p>
                                    <p class="parrafo1">Lleva contigo la porción ideal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 right">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-fluid" src="{{ asset('img/varios/puedes-mezclarlos.png') }}" alt="">
                                </div>
                                <div class="col-md-8 alignVertical">
                                    <p class="d-inline titulo3">PUEDES MEZCLARLOS</p>
                                    <p class="parrafo1">Con agua, leche o jugos y con otros Productos de Kromasol</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 banners">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/varios/energeticos.png') }}" alt=""></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/varios/antioxidantes.png') }}" alt=""></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/varios/peso.png') }}" alt=""></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/varios/digestion.png') }}" alt=""></a>
                </div>

                <div class="col-md-12 empresa-mexicana">
                    <div class="row">
                        <div class="col-md-6 left">
                            <a href="#"><img class="img-fluid" src="{{ asset('img/logos/kromasol-2.svg') }}" alt=""></a>
                        </div>
                        <div class="col-md-6 right alignVertical">
                            <p class="align-middle"><strong>Es un proyecto que está cambiando vidas</strong>, en los casi 10 años desde su fundación, ha fortalecido sus bases en los valores, la unión familiar, el reconocimiento al trabajo y el desarrollo profesional en sus Distribuidores.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 video">
                    <div class="row">
                        <div class="col-md-6 left alignVertical">
                            <p class="parrafo1"><span>Puedes consumir y compartir nuestra línea de Productos como Distribuidor</span>, para ello Kromasol cuenta con el desarrollo de redes de mercadeo, a través del <span>plan más atractivo de Reembolsos, estímulos y beneficios</span> generando ganancias para ti de la manera más novedosa de la industria.</p>
                        </div>
                        <div class="col-md-6 right">
                            <a href="#"><img class="img-fluid" src="{{ asset('img/varios/video.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 paises-11">
                    <div class="row">
                        <div class="col-md-6 left">
                            <a href="#"><img class="img-fluid" src="{{ asset('img/varios/11-paises.png') }}" alt=""></a>
                        </div>
                        <div class="col-md-6 right alignVertical">
                            <p class="parrafo1"><span>Y continuamos expandiéndonos</span> a nuevas fronteras, lo que convierte al proyecto en una gran oportunidad de emprender un negocio internacional, abundante, que sea estable para ti y tu familia.</p>
                        </div>
                        <div class="col-md-12 text-center">
                            <p class="parrafo1 mt-5">Forma parte de esta gran familia de líderes con MAYOR CRECIMIENTO en la industria y construye una carrera de éxito.</p>
                            <h3 class="titulo4">NO VAMOS A PARAR HASTA SER LOS MEJORES</h3>
                        </div>
                    </div>
                </div>

                <div class="row tu-negocio-digital">
                    <div class="col-md-12 header mb-5">
                        <div class="row">
                            <div class="col-md-5">
                                <h1 class="display-4 titulo2">TU <span>NEGOCIO DIGITAL</span></h1>
                            </div>
                            <div class="col-md-7 alignVertical">
                                <p class="titulo5">Hay muchas formas de ganar dinero en KROMASOL</p>
                                <p class="parrafo3">El primer paso es INSCRIBIRTE para que comiences a disfrutar de los beneficios de formar parte de <strong>la gran familia KROMASOL</strong>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 filas">
                        @foreach($data['negocios'] as $negocio)
                        <div class="row">
                            <div class="col-md-3 imagen alignVertical">
                                <img src="{{ URL::asset('storage/app/public/imagenes/tu-negocio-digital') }}/{{ $negocio->imagen }}" />
                            </div>
                            <div class="col-md-1 numero">
                                <h1 class="display-1">{{ $negocio->orden }}</h1>
                            </div>
                            <div class="col-md-1 borde"></div>
                            <div class="col-md-7 texto">
                                <p class="titulo6">{{ $negocio->titulo }}</p>
                                <p class="parrafo1">{{ $negocio->descripcion }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="row slider">
                    <div class="col-md-12 header">
                        <h1 class="display-4 titulo2">BENEFICIOS DE UN NUEVO<br /><span>ESTILO DE VIDA</span></h1>
                    </div>
                    <div class="col-md-12 w-slider">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 left">
                                            <img class="img-fluid" src="{{ asset('img/slider/playa.png') }}" alt="">
                                        </div>
                                        <div class="col-md-8 right">
                                            <div class="wrapper-contenido pt-5">
                                                <div class="row">
                                                    <div class="col-md-3 imagen">
                                                        <img class="img-fluid" src="{{ asset('img/slider/viaje-salvaje.svg') }}" alt="">
                                                    </div>
                                                    <div class="col-md-9 texto">
                                                        <p class="titulo6">VIAJE DE PLAYA</p>
                                                        <p class="descripcion parrafo1">Dale a tu familia vacaciones que se merecen en los mejores destinos turísticos, en hoteles 5 diamantes, las fiestas temáticas más salvajes, disfruta de las actividades en la playa y acostúmbrate a tu nuevo estilo de vida.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 left">
                                            <img class="img-fluid" src="{{ asset('img/slider/playa.png') }}" alt="">
                                        </div>
                                        <div class="col-md-8 right">
                                            <div class="wrapper-contenido pt-5">
                                                <div class="row">
                                                    <div class="col-md-3 imagen">
                                                        <img class="img-fluid" src="{{ asset('img/slider/viaje-salvaje.svg') }}" alt="">
                                                    </div>
                                                    <div class="col-md-9 texto">
                                                        <p class="titulo6">VIAJE II DE PLAYA</p>
                                                        <p class="descripcion parrafo1">Dale a tu familia vacaciones que se merecen en los mejores destinos turísticos, en hoteles 5 diamantes, las fiestas temáticas más salvajes, disfruta de las actividades en la playa y acostúmbrate a tu nuevo estilo de vida.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 left">
                                            <img class="img-fluid" src="{{ asset('img/slider/playa.png') }}" alt="">
                                        </div>
                                        <div class="col-md-8 right">
                                            <div class="wrapper-contenido pt-5">
                                                <div class="row">
                                                    <div class="col-md-3 imagen">
                                                        <img class="img-fluid" src="{{ asset('img/slider/viaje-salvaje.svg') }}" alt="">
                                                    </div>
                                                    <div class="col-md-9 texto">
                                                        <p class="titulo6">VIAJE III DE PLAYA</p>
                                                        <p class="descripcion parrafo1">Dale a tu familia vacaciones que se merecen en los mejores destinos turísticos, en hoteles 5 diamantes, las fiestas temáticas más salvajes, disfruta de las actividades en la playa y acostúmbrate a tu nuevo estilo de vida.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="seccion footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 left">
                        <a href="mailto:luis.arellano@kromasol.com" class="text-white">luis.arellano@kromasol.com</a>
                    </div>
                    <div class="col-md-6 col-sm-12 right">
                        <ul>
                            <li class="d-inline">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('img/redes/in.svg') }}" alt="">
                                </a>
                            </li>
                            <li class="d-inline">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('img/redes/fb.svg') }}" alt="">
                                </a>
                            </li>
                            <li class="d-inline">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('img/redes/tw.svg') }}" alt="">
                                </a>
                            </li>
                            <li class="d-inline">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('img/redes/wa.svg') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            // Get tipo Futura
            var searchRequest = null;
            (function(d) {
                var config = {
                        kitId: 'riy0eaa',
                        scriptTimeout: 3000,
                        async: true
                    },
                    h = d.documentElement,
                    t = setTimeout(function() {
                        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                    }, config.scriptTimeout),
                    tk = d.createElement("script"),
                    f = false,
                    s = d.getElementsByTagName("script")[0],
                    a;
                h.className += " wf-loading";
                tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
                tk.async = true;
                tk.onload = tk.onreadystatechange = function() {
                    a = this.readyState;
                    if (f || a && a != "complete" && a != "loaded") return;
                    f = true;
                    clearTimeout(t);
                    try {
                        Typekit.load(config)
                    } catch (e) {}
                };
                s.parentNode.insertBefore(tk, s)
            })(document);

            // Activar carrusel
            $(document).ready(function() {
                $('.carousel').carousel({
                    interval: 3000
                })
            });
        </script>

</body>

</html>