<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/overrides.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-overrides.css') }}" rel="stylesheet">
</head>
<body>
<div id="page">
    <nav class="colorlib-nav">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div id="colorlib-logo">
                            <a href="{{route("home")}}">Cit'Innov</a>
                        </div>
                    </div>
                    <div class="col-md-9 text-right menu-1">
                        <ul>
                            <li class="active">
                                <a href="{{route("home")."#presentation"}}">Présentation</a>
                            </li>
                            <li>
                                <a href="{{route("home")."#programme"}}">Le programme</a>
                            </li>
                            <li><a href="blog.html">Nos sponsors</a></li>
                            <li><a href="about.html">Nous rejoindre</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section id="home" class="video-hero"
             style="height:700px;"
             data-section="home">
        <div class="mbYTP_wrapper" id="wrapper_YTP_1638300979955"
             style="background: linear-gradient(to right, #257f3f,#62a243); display:flex;justify-content:center; align-items:center;position: absolute; z-index: 0; min-width: 100%; min-height: 100%; left: 0px; top: 0px; overflow: hidden; opacity: 1; transition-property: opacity; transition-duration: 2000ms;">
            <img src="{{asset("images/tree.png")}}" style="height: 100%; text-align: center;">
            <div class="YTPOverlay" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        </div>
        <div class="overlay"></div>
        <a class="player mb_YTPlayer isMuted"
           data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"
           id="YTP_1638300979955" style="display: none; position: relative;"></a>
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="animate-box fadeInUp animated-fast">
                            <h2>Conférence Cit'Innov</h2>
                            <p>18 Janvier 2022</p>
                            <p><a href="gallery.html" class="btn btn-primary btn-lg btn-custom">Réserver</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="colorlib-work-featured colorlib-bg-white">
        <div class="container">
            <div class="row mobile-wrap" id="presentation">
                <div class="col-md-5 animate-box fadeInUp animated-fast">
                </div>
                <div class="col-md-7 animate-box fadeInUp animated-fast">
                    <div class="desc">
                        <h2>Présentation</h2>
                        <div class="features">
                            <span class="icon"><i class="icon-lightbulb"></i></span>
                            <div class="f-desc">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                        </div>
                        <div class="features">
                            <span class="icon"><i class="icon-circle-compass"></i></span>
                            <div class="f-desc">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name</p>
                            </div>
                        </div>
                        <div class="features">
                            <span class="icon"><i class="icon-beaker"></i></span>
                            <div class="f-desc">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                        </div>
                        <p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i
                                    class="icon-arrow-right3"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="row mobile-wrap">
                <div class="col-md-5 col-md-push-7 animate-box fadeInUp animated-fast">
                </div>
                <div class="col-md-7 col-md-pull-5 animate-box fadeInUp animated-fast">
                    <div class="desc">
                        <h2>Le programme</h2>
                        <div class="features">
                            <span class="icon"><i class="icon-lightbulb"></i></span>
                            <div class="f-desc">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                        </div>
                        <div class="features">
                            <span class="icon"><i class="icon-circle-compass"></i></span>
                            <div class="f-desc">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name</p>
                            </div>
                        </div>
                        <div class="features">
                            <span class="icon"><i class="icon-beaker"></i></span>
                            <div class="f-desc">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                        </div>
                        <p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i
                                    class="icon-arrow-right3"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-subscribe" class="colorlib-subscribe"
         style="background: linear-gradient(to right, #257f3f,#62a243);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box fadeInUp animated-fast">
                    <h2>Nos sponsors</h2>
                </div>
            </div>
            <div class="row animate-box fadeInUp animated-fast">

            </div>
        </div>
    </div>
</div>
<div class="colorlib-services colorlib-bg-white">
    <h2 class="text-center">Nous rejoindre</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
                <div class="services">
                    <span class="icon">
                        <i class="icon-browser"></i>
                    </span>
                    <div class="desc">
                        <h3>Create your own template</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
                <div class="services">
                    <span class="icon">
                        <i class="icon-download"></i>
                    </span>
                    <div class="desc">
                        <h3>Automatic Backup Data</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
                <div class="services">
                    <span class="icon">
                        <i class="icon-layers"></i>
                    </span>
                    <div class="desc">
                        <h3>Page Builder</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="colorlib-footer">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-3 colorlib-widget">
                <h4>About unapp</h4>
                <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove right at the coast of the Semantics</p>
                <p>
                </p>
                <ul class="colorlib-social-icons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                </ul>
                <p></p>
            </div>
            <div class="col-md-3 colorlib-widget">
                <h4>Information</h4>
                <p>
                </p>
                <ul class="colorlib-footer-links">
                    <li><a href="#"><i class="icon-check"></i> Home</a></li>
                    <li><a href="#"><i class="icon-check"></i> Gallery</a></li>
                    <li><a href="#"><i class="icon-check"></i> About</a></li>
                    <li><a href="#"><i class="icon-check"></i> Blog</a></li>
                    <li><a href="#"><i class="icon-check"></i> Contact</a></li>
                    <li><a href="#"><i class="icon-check"></i> Privacy</a></li>
                </ul>
                <p></p>
            </div>
            <div class="col-md-3 colorlib-widget">
                <h4>Recent Blog</h4>
                <div class="f-blog">
                    </a>
                    <div class="desc">
                        <h2><a href="blog.html">Photoshoot Technique</a></h2>
                        <p class="admin"><span>30 March 2018</span></p>
                    </div>
                </div>
                <div class="f-blog">
                    </a>
                    <div class="desc">
                        <h2><a href="blog.html">Camera Lens Shoot</a></h2>
                        <p class="admin"><span>30 March 2018</span></p>
                    </div>
                </div>
                <div class="f-blog">
                    </a>
                    <div class="desc">
                        <h2><a href="blog.html">Imahe the biggest photography studio</a></h2>
                        <p class="admin"><span>30 March 2018</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 colorlib-widget">
                <h4>Contact Info</h4>
                <ul class="colorlib-footer-links">
                    <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                    <li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
                    <li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
                    <li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/custom_js.js")}}"></script>
<script src="{{asset("js/jquery.countTo.js")}}"></script>
<script src="{{asset("js/jquery.easing.1.3.js")}}"></script>
<script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("js/jquery.mb.YTPlayer.min.js")}}"></script>
<script src="{{asset("js/jquery.stellar.min.js")}}"></script>
<script src="{{asset("js/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("js/magnific-popup-options.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>
<script src="{{asset("js/modernizr-2.6.2.min.js")}}"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/respond.min.js")}}"></script>
</body>
</html>
