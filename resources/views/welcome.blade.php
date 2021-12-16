<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Solid State by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("css/main.css")}}" />
    <link rel="stylesheet" href="{{asset("css/fontawesome-all.min.css")}}" />
    <noscript><link rel="stylesheet" href="{{asset("css/noscript.css")}}" /></noscript>
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="{{route("home")}}">Cit'Innov</h1>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <div class="inner">
            <h2>Menu</h2>
            <ul class="links">
                <li><a href="{{route("home")}}">Accueil</a></li>
                <li><a href="{{route("home").'#presentation'}}">Présentation</a></li>
                <li><a href="{{route("home").'#programme'}}">Le programme</a></li>
                <li><a href="{{route("home").'#rejoindre'}}">Nous rejoindre</a></li>
                <li><a href="{{route("home").'#sponsors'}}">Nos sponsors</a></li>
            </ul>
            <a href="/" class="close">Fermer</a>
        </div>
    </nav>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2>Cit'innov</h2>
            <p>Conférence le 18 Janvier 2022 à 10h</p>
            <p><a href="{{route("home").'#rejoindre'}}">Réserver sa place</a></p>
        </div>
    </section>

    <!-- Wrapper -->
    <section id="wrapper">

        <!-- One -->
        <section id="presentation" class="wrapper spotlight style1">
            <div class="inner">
                <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
                <div class="content">
                    <h2 class="major">Présentation de l'événement</h2>
                    <p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
                    <a href="#" class="special">Learn more</a>
                </div>
            </div>
        </section>

        <!-- Two -->
        <section id="programme" class="wrapper alt spotlight style2">
            <div class="inner">
                <a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
                <div class="content">
                    <h2 class="major">Le programme</h2>
                    <p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
                    <a href="#" class="special">Learn more</a>
                </div>
            </div>
        </section>

        <!-- Three -->
        <section id="rejoindre" class="wrapper spotlight style3">
            <div class="inner">
                <div class="content">
                    <h2 class="major">Nous rejoindre</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="d-flex font-weight-bold" style="align-items: center;" href="https://discord.gg/4EszNhHM" target="_blank">
                                <img src="{{asset("images/discord.png")}}" width="100">
                                Discord
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a class="d-flex font-weight-bold" style="align-items: center;" href="https://discord.gg/4EszNhHM" target="_blank">
                                <img src="{{asset("images/discord.png")}}" width="100">
                                Discord
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Four -->
        <section id="sponsors" class="wrapper alt style1">
            <div class="inner">
                <h2 class="major">Nos sponsors</h2>
                <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
                <section class="features">
                    <article>
                        <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                        <h3 class="major">Sed feugiat lorem</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                        <h3 class="major">Nisl placerat</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                        <h3 class="major">Ante fermentum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                        <h3 class="major">Fusce consequat</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                </section>
                <ul class="actions">
                    <li><a href="#" class="button">Browse All</a></li>
                </ul>
            </div>
        </section>

    </section>

    <!-- Footer -->
    <section id="footer">
        <div class="inner">
            <h2 class="major">Get in touch</h2>
            <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="4"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" /></li>
                </ul>
            </form>
            <ul class="contact">
                <li class="icon solid fa-home">
                    Untitled Inc<br />
                    1234 Somewhere Road Suite #2894<br />
                    Nashville, TN 00000-0000
                </li>
                <li class="icon solid fa-phone">(000) 000-0000</li>
                <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                <li class="icon brands fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
                <li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled-tld</a></li>
                <li class="icon brands fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </section>

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
