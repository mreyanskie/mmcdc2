<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MMC&DC</title>
        <!-- document icon -->
        <link rel="icon" href="{{ asset('images/favicon.png') }}"/>

        <!-- materializecss -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- animatecss -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css"/> 
        <!-- my css -->
        <link rel="stylesheet" href="{{ asset('css/landing-page.css') }}">
        <!-- this is dawei -->
        <link rel="stylesheet" href="{{ asset('css/dawei.css') }}">
        <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
        <!-- scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
        <script src="{{ asset('js/materialize.min.js') }}" defer></script>
        <script src="{{ asset('js/scrolling-nav.js') }}" defer></script>
        <script src="{{ asset('js/wow.min.js') }}" defer></script>
        <script>
            $(document).ready( function(){
                new WOW().init();
                $('.scrollspy').scrollSpy();
                $('.modal').modal();
            });
        </script>
    </head>
    <body class="grey lighten-3">
            <header>
            <nav class="z-depth-0 transparent landing-nav mt-1">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="nav-item center brand-logo" href="">
                            <img class="nav-icon mr-2" src="{{ asset('images/favicon.png') }}" alt="">Meneses Clinic</a>
                        <ul class="left hide-on-med-and-down">
                            <li><a class="nav-item" href="#home">Home</a></li>
                            <li><a class="nav-item" href="#feat">Features</a></li>
                            <li><a class="nav-item" href="#services">Services</a></li>
                            <li><a class="nav-item" href="#contact">Contact</a></li>
                        </ul>
                        @if (Route::has('login'))
                                @auth
                                <ul class="right">
                                   <li><a class="btn-small green login-btn modal-trigger"href="{{ url('/home') }}">Profile</a>
                                </ul>
                                @else
                                <ul class="right">
                                    <li><a class="btn-small blue login-btn modal-trigger" href="{{ route('login') }}">Login</a></li>
            
                                    @if (Route::has('register'))
                                        <li><a class="nav-item btn-small red login-btn modal-trigger" href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            @endif
                            </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- hero section -->
	<div class="hero full-hero hero-bg scrollspy" id="home">
            <div class="hero-content flex-center">
                <h1 class="thin tagline white-text">Your Trusted Medical Clinic</h1>
            </div>
        </div>
        
        <!-- main content -->
        <main>
            <div class="container">
                <div class="row my-5 scrollspy" id="feat">
                    <div class="col l4">
                        <div class="card">
                            <div class="card-content center">
                                <i class="fa fa-rocket fa-5x"></i>
                                <h5 class="title light">Fast</h5>
                                <p class="px-3 justify-align">It's easy to register just create your own account in our system you do not need to fill-up a generic form</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col l4">
                        <div class="card">
                            <div class="card-content center">
                                <i class="fa fa-clipboard fa-5x"></i>
                                <h5 class="title light">History</h5>
                                <p class="px-3 justify-align">
                                You can see your current and old records in your own account.
                            </p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col l4">
                        <div class="card">
                            <div class="card-content center">
                                <i class="fa fa-thumbs-up fa-5x"></i>
                                <h5 class="title light">Convenient</h5>
                                <p class="px-3 justify-align">
                                Just fast. You can set an appointment with the doctor. Just look at the schedules available. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- subhero -->
            <div class="hero hero-parallaxed subhero-bg half-hero blue">
                <div class="hero-content flex-center">
                    <h1 class="thin tagline white-text"></h1>
                </div>
            </div>
            <!-- services -->
        </main>

            <!-- footer content -->
        <footer class="page-footer transparent pt-5 scrollspy" id="contact">
            <div class="container">
                <div class="row mb-5 scrollspy" id="contact">
                    <div class="col s12">
                        <ul class="brand-title grey-text text-darken-2">
                            <li><i class="fa fa-home"></i> J.Luna St. Poblacion, Morong, Bataan</li>
                            <li><i class="fa fa-envelope"></i>MMC@gmail.com</li>
                            <li><i class="fa fa-phone"></i> +63 0014 30000</li>
                        </ul>

                        <a class="brand-title grey-text text-darken-2" href="#">Meneses Medical Clinic & Diagnostic Center &copy;</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
