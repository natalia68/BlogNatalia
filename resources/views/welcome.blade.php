<!DOCTYPE HTML>
<!--
    Imagination by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>Imagination by TEMPLATED</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel-noscript.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-desktop.css" />
        </noscript>
    </head>
    <body class="homepage">

    <div id="header-wrapper">

        <!-- Header -->
            <div id="header">
                <div class="container">
                        
                    <!-- Logo -->
                        <div id="logo">
                            <h1><a href="#">Natalia Brochero</a></h1>
                        </div>
                    
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li class="active"><a href="index.html">Inicio</a></li>

                                

                                <li><a href="{{url('/sobremi')}}">Sobre Mí</a></li>

                                <li><a href="right-sidebar.html">Blog</a></li>
                                <li><a href="no-sidebar.html">Portafolio</a></li>

               @if (Route::has('login'))
                
                       <li><a href="{{ url('/login') }}">Login</a></li>
               
            @endif
                                 
                            </ul>
                        </nav>
    
                </div>
            </div>
        <!-- Header -->

        <!-- Banner -->
            <div id="banner">
                <div class="container">
    
                    <section>
                        <span class="fa fa-desktop"></span>
                        <header>
                            <h2>Natalia Brochero</h2>
                            <span class="byline">Analisis y desarrollo de sistemas de información </span>
                        </header>
                         <a href="no-sidebar.html" class="button medium">Contactame</a>
                    </section>  
                </div>
            </div>
        <!-- /Banner -->

    </div>

    <!-- Extra -->
        <div id="extra">
            <div class="container">
                <div class="row">
                    <section class="3u">
                        <header>
                            <h2>Recolección de información</h2>
                        </header>
                        <span class="fa fa-magic"></span>
                        <p>Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus.</p>
                    </section>
                    <section class="3u">
                        <header>
                            <h2>Analisis</h2>
                        </header>
                        <span class="fa fa-wrench"></span>
                        <p>Pellentesque tristique ante ut risus. Integer risus congue. Suspendisse dictum porta lectus.</p>
                    </section>
                    <section class="3u">
                        <header>
                            <h2> Diseño</h2>
                        </header>
                        <span class="fa fa-chain"></span>
                        <p>Suspendisse dictum porta lectus. Integer nisl risus, sagittis convallis, rutrum congue nibh. </p>
                    </section>
                    <section class="3u">
                        <header>
                            <h2>Pruebas</h2>
                        </header>
                        <span class="fa fa-briefcase"></span>
                        <p>In posuere eleifend odio quisque semper augue mattis wisi maecenas ligula augue praesent.</p>
                    </section>
                </div>
                <a href="#" class="button medium">Etiam posuere augue</a>
            </div>
        </div>

    <!-- /Extra -->

    <!-- Main -->
        <div id="main">
        
            <div class="container">

                <section>
                    <header>
                        <h2>Maecenas luctus lectus</h2>
                        <span class="byline">Posuere eleifend odio quisque semper mattis</span>
                    </header>
                </section>

                <div class="row">
                    <section class="6u right">
                        <a href="#" class="image full"><img src="images/pics05.jpg" alt=""></a>
                        <p>This is <strong>Imagination</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
                    </section>              
                    <section class="6u left">
                        <a href="#" class="image full"><img src="images/pics06.jpg" alt=""></a>
                        <p>Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi purus ac magna. Pellentesque habitant morbi</p>
                    </section>
                </div>
                <div class="divider"></div>
                <a href="#" class="button medium">View Full Details</a>     
            </div>
        </div>
    <!-- /Main -->

    <!-- Featured -->
        <div id="featured">
            <div class="container">
                <section>
                    <header>
                        <h2>Fusce ultrices fringilla metus</h2>
                        <span class="byline">Posuere eleifend odio quisque semper mattis</span>
                    </header>
                </section>
                <div class="row">
                    <section class="4u">
                        <a href="#" class="image full"><img src="images/pics01.jpg" alt=""></a>
                        <p>Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus.</p>
                        <p><a href="#" class="button">View Full Details</a></p>
                    </section>
                    <section class="4u">
                        <a href="#" class="image full"><img src="images/pics03.jpg" alt=""></a>
                        <p>Pellentesque tristique ante ut risus. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus.</p>
                        <p><a href="#" class="button">View Full Details</a></p>
                    </section>
                    <section class="4u">
                        <a href="#" class="image full"><img src="images/pics04.jpg" alt=""></a>
                        <p>Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus.</p>
                        <p><a href="#" class="button">View Full Details</a></p>
                    </section>
                </div>
            </div>
        </div>
    <!-- /Featured -->

    <!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <section class="4u">
                        <header>
                            <h2>Nulla eleifend</h2>
                        </header>
                        <ul class="default">
                            <li><a href="#">Pellentesque quis elit non gravida blandit.</a></li>
                            <li><a href="#">Lorem ipsum dolor sit consectetuer adipiscing elit.</a></li>
                            <li><a href="#">Phasellus nec erat sit nibh pellentesque congue.</a></li>
                            <li><a href="#">Cras vitae metus aliquam pellentesque pharetra.</a></li>
                            <li><a href="#">Duis non ante in metus commodo euismod lobortis.</a></li>
                        </ul>
                    </section>
                    <section class="4u">
                        <header>
                            <h2>Etiam posuere</h2>
                        </header>
                        <ul class="default">
                            <li><a href="#">Pellentesque quis elit non gravida blandit.</a></li>
                            <li><a href="#">Lorem ipsum dolor sit consectetuer adipiscing elit.</a></li>
                            <li><a href="#">Phasellus nec erat sit nibh pellentesque congue.</a></li>
                            <li><a href="#">Cras vitae metus aliquam pellentesque pharetra.</a></li>
                            <li><a href="#">Duis non ante in metus commodo euismod lobortis.</a></li>
                        </ul>
                    </section>
                    <section class="4u">
                        <header>
                            <h2>Mauris vulputate</h2>
                        </header>
                        <ul class="default">
                            <li><a href="#">Pellentesque quis elit non gravida blandit.</a></li>
                            <li><a href="#">Lorem ipsum dolor sit consectetuer adipiscing elit.</a></li>
                            <li><a href="#">Phasellus nec erat sit nibh pellentesque congue.</a></li>
                            <li><a href="#">Cras vitae metus aliquam pellentesque pharetra.</a></li>
                            <li><a href="#">Duis non ante in metus commodo euismod lobortis.</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    <!-- /Footer -->

    <!-- Copyright -->
        <div id="copyright">
            <div class="container">
                Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
            </div>
        </div>


    </body>
</html>