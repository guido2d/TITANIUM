@extends('layouts.main') @section('contenido')

<section class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="block blue-block">
                <h1 class="animated fadeInLeft">MEMBRANAS ASFÁLTICAS</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="banner-membranas"></div>
        </div>
    </div>
</section>

<section class="asfalticas">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 decorativas p0">
                <div class="title">
                    <h3 class="animated fadeInLeft">Decorativas</h3>
                </div>
                <div class="subsecciones">
                    <div class="row">
                        <div class="col-md-6 odd">
                            <a href="#">Linea deco art</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pair">
                            <a href="#">Linea fans</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 odd">
                            <a href="{{ route('muros-paredes') }}">Linea muros y paredes</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pair">
                            <a href="#">Linea color</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 aluminio p0">
                <div class="title">
                    <h3 class="animated fadeInRight">Con aluminio</h3>
                </div>
                <div class="subsecciones">
                    <div class="row">
                        <div class="col-md-6 odd">
                            <a href="#">Linea aluminio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 sin-aluminio p0">
                <div class="title">
                    <h3>Sin Aluminio</h3>
                </div>
                <div class="subsecciones">
                    <div class="row">
                        <div class="col-md-6 odd">
                            <a href="#">Linea sin aluminio</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 geotextil p0">
                <div class="title">
                    <h3>Con Geotextil</h3>
                </div>
                <div class="subsecciones">
                    <div class="row">
                        <div class="col-md-6 odd">
                            <a href="#">Linea transitable</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="te-asistimos">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Te asistimos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="img/icons/TITANIUM%20TV.png" alt="">
                <span class="title">Titanium TV</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="img/icons/CALCULADOR.png" alt="">
                <span class="title">Cotizador</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="img/icons/RED%20TITANIUM.png" alt="">
                <span class="title">Red Titanium</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="img/icons/PREGUNTAS%20FRECUENTES.png" alt="">
                <span class="title doble-linea">Preguntas Frecuentes</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-2">
                <img src="img/icons/DONDE%20COMPRAR.png" alt="">
                <span class="title">Dónde Comprar</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="img/icons/PROYECTOS%20REALIZADOS.png" alt="">
                <span class="title doble-linea">Proyectos Realizados</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="img/icons/CONTACTO.png" alt="">
                <span class="title">Contacto</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
        </div>
    </div>
</section>

@endsection