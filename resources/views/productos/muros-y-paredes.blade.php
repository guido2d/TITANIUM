@extends('layouts.main') @section('contenido')

<section class="banner detalle-producto">
    <div class="container-fluid">
        <div class="row categoria-principal">
            <div class="block lila-block">
                <div class="container">
                    <h3 class="animated fadeInLeft">MEMBRANAS ASFÁLTICAS DECORATIVAS</h3>
                </div>
            </div>
        </div>
        <div class="row categoria">
            <div class="block light-lila-block">
                <h1 class="animated fadeInLeft">Linea muros y paredes</h1>
            </div>
        </div>
        
        <div class="row imagenes">
            <div class="col-md-6 p0 img-producto">
                <img src="{{ asset('img/productos/murosyparedes.jpg') }}" alt="Linea muros y paredes" class="animated fadeInLeft">
            </div>
            <div class="col-md-6 p0 img-secundaria">
                <img src="{{ asset('img/productos/casa-ladrillos.jpg') }}" alt="">
            </div>
        </div>
        
        <div class="row subtitle">
            <div class="block light-lila-block">
                <span class="animated fadeInLeft">La solución para impermeabilizar y decorar en un mismo producto</span>
            </div>
        </div>
    </div>
</section>

<section class="descripcion-producto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="padding-left:5%;">
                <div class="row">
                    <h3>Presentación</h3>
                </div>
                <div class="row materiales" style="margin-top:20px;">
                    <div class="col-md-3 pl0">
                        <img src="{{ asset('img/madera.png') }}" alt="">
                        <span class="img-title">Madera</span>
                    </div>
                    <div class="col-md-3 pl0">
                        <img src="{{ asset('img/ladrillo.png') }}" alt="">
                        <span class="img-title">Ladrillo</span>
                    </div>
                    <div class="col-md-3 pl0">
                        <img src="{{ asset('img/piedra.png') }}" alt="">
                        <span class="img-title">Piedra</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 informacion">
                <div class="row">
                    <div class="title">
                        <span>Características</span>
                    </div>
                </div>
                <div class="row texto">
                    <p>
                        La <strong>Membrana TITANIUM</strong> con tecnología NO BREAK extienda la vida útil del producto y brinda mayor seguridad al sistema de impermeabilización. Sumado al diseño innovador, cálido y natural de la <strong>LINEA MUROS Y PAREDES</strong>, ofrecen una de las mejores alternativas en la impermeabilización y revestimiento de muros y paredes.
                    </p>
                </div>
                
                <div class="row">
                    <div class="title">
                        <span>Usos</span>
                    </div>
                </div>
                <div class="row texto">
                    <p>
                        Impermeabilizaciones donde la membrana queda expuesta a la intemperie y que no requiera tránsito. Ejemplo: paredes y muros. También pueden utilizarse como barrera de vapor.
                    </p>
                </div>
                
                <div class="row">
                    <div class="title">
                        <span>Aplicación</span>
                    </div>
                </div>
                <div class="row texto">
                    <p>
                        Imprimar antes con Pintura Asfáltica TITANIUM, sellar grietas y fisuras existentes y calentar la parte inferior para adherir al sustrato, superponiendo de 8 a 10 cm entre rollos. Proteger las uniones con pintura asfáltica aluminizada TITANIUM.
                    </p>
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
                <img src="{{ asset('img/icons/TITANIUM%20TV.png') }}" alt="">
                <span class="title">Titanium TV</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('img/icons/CALCULADOR.png') }}" alt="">
                <span class="title">Cotizador</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('img/icons/RED%20TITANIUM.png') }}" alt="">
                <span class="title">Red Titanium</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('img/icons/PREGUNTAS%20FRECUENTES.png') }}" alt="">
                <span class="title doble-linea">Preguntas Frecuentes</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-2">
                <img src="{{ asset('img/icons/DONDE%20COMPRAR.png') }}" alt="">
                <span class="title">Dónde Comprar</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('img/icons/PROYECTOS%20REALIZADOS.png') }}" alt="">
                <span class="title doble-linea">Proyectos Realizados</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('img/icons/CONTACTO.png') }}" alt="">
                <span class="title">Contacto</span>
                <p>Aprendé a utilizar nuestros productos.</p>
            </div>
        </div>
    </div>
</section>

@endsection
