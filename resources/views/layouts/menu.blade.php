<header class="header header-home-two">
    <div class="header-top">
        <div class="container">
            <div class="pull-left left-contact-info">
            </div>
            <!-- /.pull-left -->
            <div class="pull-right right-contact-info">
                <p>
                    Contacto &nbsp;&nbsp;
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-google-plus-g"></i>
                    <i class="fab fa-linkedin-in"></i>
                    <i class="fab fa-pinterest-p"></i>
                </p>
            </div>
            <!-- /.pull-right -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed zxp-icon-menu" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false"> </button>
                <a class="navbar-brand" href="{{ asset('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="TITANIUM logo" width="85%"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu mega-opt" id="main-nav-bar">

                <ul class="nav navbar-nav navigation-box">
                    <li>
                        <a href="#">Productos</a>
                        <div class="mega-menu">
                            <div class="inner-mega-menu">
                                <p class="title"><a href="{{ route('asfalticas') }}">Membranas Asfálticas</a></p>
                                <a href="{{ route('asfalticas') }}">Membranas decorativas</a>
                                <a href="{{ route('asfalticas') }}">Membranas con aluminio</a>
                                <a href="{{ route('asfalticas') }}">Membranas con geotextil</a>
                                <a href="{{ route('asfalticas') }}">Membranas sin aluminio</a>
                            </div>
                            <div class="inner-mega-menu">
                                <p class="title"><a href="{{ route('liquidas') }}">Membranas Líquidas</a></p>
                                <a>Membranas Acuosa</a>
                                <a>Membranas Poliuretanica</a>
                            </div>
                            <div class="inner-mega-menu">
                                <p class="title una-linea"><a href="{{ route('imprimantes') }}">Imprimantes</a></p>
                                <a>Emulsión Acuosa</a>
                                <a>Pintura Asfáltica</a>
                            </div>
                            <div class="inner-mega-menu">
                                <p class="title una-linea"><a href="{{ route('terminacion') }}">Terminación</a></p>
                                <a>Pintura Aluminizada</a>
                                <a>Pintura para Geotextil</a>
                            </div>
                        </div>
                    </li>
                    <li> <a href="#">Calculador</a> </li>
                    <li> <a href="{{ route('faq') }}">Preguntas Frecuentes</a> </li>
                    <li> <a href="#">Donde Comprar</a> </li>
                    <li> <a href="#">Red Titanium</a> </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>
