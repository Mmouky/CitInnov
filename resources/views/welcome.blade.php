<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Cit'Innov</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="icon" type="image/x-icon" href="{{asset("images/favico.png")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/main.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/fontawesome-all.min.css")}}"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <noscript>
        <link rel="stylesheet" href="{{asset("css/noscript.css")}}"/>
    </noscript>
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page">

    <!-- Header -->
    <header id="header" class="alt"
            style="display: inline-table; background: linear-gradient(to right, #257f3f,#62a243);">
        <h1 style="display: table-cell; vertical-align: middle; color: white;"><a href="{{route("home")}}">Cit'Innov </a>
        </h1>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <div class="inner">
            <h2 class="text-white">Menu</h2>
            <ul class="links">
                <li><a href="{{route("home")}}">Accueil</a></li>
                <li><a href="{{route("home").'#presentation'}}">Présentation</a></li>
                <li><a href="{{route("home").'#programme'}}">Le programme</a></li>
                <li><a href="{{route("home").'#sponsors'}}">Nos sponsors</a></li>
                <li><a href="{{route("home").'#rejoindre'}}">Nous rejoindre</a></li>
                <li><a href="{{route("home").'#reserver'}}">Réserver</a></li>
            </ul>
            <a href="/" class="close">Fermer</a>
        </div>
    </nav>

    <!-- Banner -->
    <section id="home" class="video-hero"
             style="height:700px;"
             data-section="home">
        <div
            style="background: linear-gradient(to right, #257f3f,#62a243); display:flex;justify-content:center; align-items:center;position: absolute; z-index: 0; min-width: 100%; min-height: 100%; left: 0px; top: 0px; overflow: hidden; opacity: 1; transition-property: opacity; transition-duration: 2000ms;">
            <img src="{{asset("images/tree.png")}}" style="height: 100%; text-align: center;">
        </div>
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="animate-box fadeInUp animated-fast">
                            <h2>Conférence Cit'Innov</h2>
                            <p>18 Janvier 2022 de 10h à 12h</p>
                            <p>Amphithéâtre C1
                                <br>Boulevard de l’Université
                                Saint-Nazaire</p>
                            <p><a href="{{route("home").'#reserver'}}" class="btn btn-primary btn-lg btn-custom">Réserver</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="colorlib-work-featured colorlib-bg-white" id="presentation">
        <div class="container">
            <div class="row mobile-wrap">
                <div class="col-md-5 animate-box fadeInUp animated-fast">
                </div>
                <div class="col-md-7 animate-box fadeInUp animated-fast">
                    <div class="desc">
                        <h2>Présentation</h2>
                        <div class="features">
                            <div class="f-desc">
                                <p>Cit’Innov, organisé tous les ans en association avec l’école d’ingénieurs
                                    CESI, consiste à présenter une conférence sur le thème des innovations
                                    et des progrès technologiques. Cet évènement a pour objectif de
                                    sensibiliser la population aux notions technologiques liées à la ville de
                                    demain. Cela permet ainsi à chacun de se projeter
                                </p>
                            </div>
                        </div>
                        <div class="features">
                            <div class="f-desc">
                                <p>Cette conférence publique vise à présenter différents aspects de la
                                    « Smart city » dans laquelle nous vivrons demain.</p>
                            </div>
                        </div>
                        <div class="features">
                            <div class="f-desc">
                                <p>La conférence se déroulera le
                                    18/01/2022 de 10h à 12h au sein de
                                    l’amphithéâtre C, accessible depuis
                                    l’extérieur du campus CESI, situé à
                                    l’adresse : Boulevard de l’Université,
                                    44600 Saint-Nazaire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mobile-wrap" id="programme">
                <div class="col-md-7 col-md-pull-5 animate-box fadeInUp animated-fast">
                    <div class="desc">
                        <h2>Le programme</h2>
                        <div class="features">
                            <div class="f-desc">
                                <p>Elle abordera notamment des sujets comme :
                                </p>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="features">
                                    <div class="f-desc">
                                        <p>La mobilité des habitants de demain : l’évolution des transports en
                                            commun, l’avènement des véhicules autonomes, la gestion du
                                            trafic, …
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="features">
                                    <div class="f-desc">
                                        <p>La gestion de l’énergie : optimisation de l’énergie dépensée,
                                            réduction des coûts, sobriété énergétique, …</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="features">
                                    <div class="f-desc">
                                        <p>L’innovation dans le domaine de la santé : améliorer l’accès et la
                                            qualité des soins, connecter les informations de santé pour
                                            améliorer les soins, hôpital intelligent, …</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="features">
                                    <div class="f-desc">
                                        <p>La gouvernance de nos villes : sécurité et surveillance des villes,
                                            simplification des démarches, participation des citoyens.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-md-push-7 animate-box fadeInUp animated-fast">
                </div>
            </div>
        </div>
    </div>
    <div id="sponsors">
        <div id="colorlib-subscribe" class="colorlib-subscribe"
             style="background: linear-gradient(to right, #257f3f,#62a243);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div
                    class="text-center colorlib-heading animate-box fadeInUp animated-fast">
                    <h2>Nos sponsors</h2>
                </div>
                <div class="row animate-box fadeInUp animated-fast">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="colorlib-services colorlib-bg-white" id="rejoindre">
    <h2 class="text-center" style="font-size: 40px;">Nous rejoindre</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
                <div class="services">
                    <a target="_blank" href="https://bit.ly/3yx2Imp">
                        <span class="icon">
                            <img src="{{asset('images/discord.png')}}" style="height: 100px;">
                        </span>
                        <div class="desc">
                            <h3>Discord</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
                <div class="services">
                    <a target="_blank" href="https://bit.ly/3sd5mg6">
                        <span class="icon">
                            <img src="{{asset('images/facebook.png')}}" style="height: 100px;">
                        </span>
                        <div class="desc">
                            <h3>Facebook</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
                <div class="services">
                    <a target="_blank" href="https://bit.ly/3q1jAOz">
                        <span class="icon">
                            <img src="{{asset('images/linkedin.png')}}" style="height: 100px;">
                        </span>
                        <div class="desc">
                            <h3>Linkedin</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center animate-box fadeInUp animated-fast">
                <div class="services">
                    <a target="_blank" href="https://www.twitch.tv/citinnov">
                        <span class="icon">
                            <img src="{{asset('images/twitch.png')}}" style="height: 100px;">
                        </span>
                        <div class="desc">
                            <h3>Twitch</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center animate-box fadeInUp animated-fast">
                <div class="services">
                    <a target="_blank" href="https://www.instagram.com/cit_innov/">
                        <span class="icon">
                            <img src="{{asset('images/insta.png')}}" style="height: 100px;">
                        </span>
                        <div class="desc">
                            <h3>Instagram</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="reserver" class="container">
    <h2 class="text-center" style="font-size: 40px;">Réserver</h2>
    <iframe allowtransparency="true" scrolling="auto"
            src="https://www.helloasso.com/associations/cit-innov/evenements/conference-cit-innov/widget"
            style="width: 100%; height: 750px; border: none;" onload="window.scroll(0, this.offsetTop)"></iframe>
</div>
<footer id="colorlib-footer">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-6 colorlib-widget">
                <h4>Information</h4>
                <p>
                </p>
                <ul class="colorlib-footer-links">
                    <li><a href="{{route("home")}}">Accueil</a></li>
                    <li><a href="{{route("home").'#presentation'}}">Présentation</a></li>
                    <li><a href="{{route("home").'#programme'}}">Le programme</a></li>
                    <li><a href="{{route("home").'#sponsors'}}">Nos sponsors</a></li>
                    <li><a href="{{route("home").'#rejoindre'}}">Nous rejoindre</a></li>
                    <li><a href="{{route("home").'#reserver'}}">Réserver</a></li>
                </ul>
                <p></p>
            </div>
            <div class="col-md-6 colorlib-widget">
                <h4>Nous contacter</h4>
                <ul class="colorlib-footer-links">
                    <li>Amphithéâtre C 1,
                        <br>Boulevard de l’Université
                        Saint-Nazaire
                    </li>
                    <li><a href="mailto:contact.citinnov@gmail.com"><i class="icon-envelope"></i>contact.citinnov@gmail.com</a>
                    </li>
                    <li><a href="https://www.cit-innov.fr"><i class="icon-location4"></i> www.cit-innov.fr</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</div>

<!-- Scripts -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/jquery.scrollex.min.js")}}"></script>
<script src="{{asset("js/browser.min.js")}}"></script>
<script src="{{asset("js/breakpoints.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/util.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>

</body>
</html>
