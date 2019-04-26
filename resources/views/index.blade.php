@extends('layouts.main') @section('contenido')

<section id="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="block orange-block">
                <h1 class="animated fadeInLeft">La mejor calidad en impermeabilizantes</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-md-3 p0">
                <div class="membrana_asfaltica animated fadeInLeft">
                    <div class="blue-overlay">
                        <div class="text-container bgblue">
                            <a href="{{ route('asfalticas') }}"><span class="centrado-dos-lineas">Membranas <br>asfálticas</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p0">
                <div class="membrana_liquida animated fadeInLeft">
                    <div class="pink-overlay">
                        <div class="text-container bgpink">
                            <a href="{{ route('liquidas') }}"><span class="centrado-dos-lineas">Membranas <br>líquidas</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p0">
                <div class="imprimantes animated fadeInRight">
                    <div class="yellow-overlay">
                        <div class="text-container bgyellow">
                            <a href="{{ route('imprimantes') }}"><span class="centrado-una-linea">Imprimantes</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p0">
                <div class="terminaciones animated fadeInRight">
                    <div class="green-overlay">
                        <div class="text-container bggreen">
                            <a href="{{ route('terminacion') }}"><span class="centrado-una-linea">Terminaciones</span></a>
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

<section class="cta-style-one">
    <div class="inner">
        <div class="container">
            <div class="title pull-left">
                <h3>¿Quiere saber que cantidad de rollos necesita?</h3>
            </div>
            <!-- /.title pull-left -->
            <div class="btn-box pull-right">
                <a href="#" class="cta-btn">Utilice nuestro calculador 100% online</a>
            </div>
            <!-- /.btn-box -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.inner -->
</section>
<!-- /.cta-style-one -->

<section class="faq-feature-wrapper faq-style-one sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title">
                    <h3>Preguntas Frecuentes</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, aperiam consequuntur dolore mollitia laborum officia recusandae quae. Perspiciatis aut maxime ab, suscipit nesciunt. Pariatur voluptatem</p>
                </div>
                <!-- /.sec-title -->
                <div class="accrodion-grp" data-grp-name="faq-accrodion">
                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>Lorem ipsum dolor sit amet</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem. Possimus, assumenda recusandae aut, culpa beatae consequuntur</p>
                            </div>
                            <!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion ">
                        <div class="accrodion-title">
                            <h4>Dolor sit amet, consectetuer adipiscing elit</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem. Possimus, assumenda recusandae aut, culpa beatae consequuntur</p>
                            </div>
                            <!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>Sed diam nonummy nibh euismod</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem. Possimus, assumenda recusandae aut, culpa beatae consequuntur</p>
                            </div>
                            <!-- /.inner -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.faq-feature-wrapper -->

@endsection
