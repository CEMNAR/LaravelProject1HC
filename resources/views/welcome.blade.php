<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/js/uikit-icons.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .footer-container {
                text-align: center;
                width: 100%;
                padding: 20px 0;
            }
            .footer-container p {
                margin: 0;
            }
        </style>
    </head>
    <body>
    <div class="uk-position-relative">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; uk-light; top: 200">
                    <nav style="background: rgba(255,255,255,0.95) !important;" class="uk-navbar-container" uk-navbar>
                        <div class="uk-navbar-left">
                            <ul class="uk-navbar-nav">
                                <a class="uk-navbar-item uk-logo" href="/" ><img src="asset/img/logo2.png" width="60px"></a>
                                <li>
                                    <a href="hackernews">Blog Hackernews</a>
                                </li>
                                <li>
                                    <a href="sendemail">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
    <div uk-slideshow="animation: scale">

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 8:3">

            <ul class="uk-slideshow-items">
                <li>
                    <img src="asset/img/hotel1.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h2 class="uk-margin-remove">HOTELCARD</h2>
                        <p class="uk-margin-remove">Hotelcard is a worldwide novelty in the tourism industry. With a Hotelcard membership you can save 50% on hotel bookings.</p>
                            <p> Explore over 700 hotels in the most beautiful regions and book as often as you like and stay as many nights as you wish.</p>
                    </div>
                </li>
                <li>
                    <img src="asset/img/hotel2.jpeg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h2 class="uk-margin-remove">600 Top-Hotels zum halben Preis</h2>
                        <p class="uk-margin-remove">Mit Hotelcard übernachten Sie in über 600 Hotels in der Schweiz, in Deutschland, Österreich und Italien und können die angebotenen Suiten, Familien, Doppel- und Einzelzimmer beliebig oft zum halben Preis buchen.</p>
                    </div>
                </li>
                <li>
                    <img src="asset/img/hotel3.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h2 class="uk-margin-remove">Sparen Sie bei jedem Aufenthalt</h2>
                        <p class="uk-margin-remove">Bei jeder Übernachtung sparen Sie Hunderte von Franken. Je häufiger Sie Ihre Hotelcard nutzen, desto höher das Sparpotenzial. Den Kaufpreis Ihrer Hotelcard haben Sie nach der ersten Übernachtung wieder eingespielt.</p>
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>

        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
<hr>
    </div>
                <br>
<div class="uk-container">
                <div class="uk-child-width-1-2@s" uk-grid>
                    <div>
                        <div class="uk-card uk-card-hover uk-card-small">
                            <div class="uk-card-media-top">
                                <img src="asset/img/hh2.jpg">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Hotel at New York</h3>
                                <p>Come on to enjoy this suite for -50% with our HotelCard.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-hover uk-card-small">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Miami View</h3>
                                <p>With HotelCard you can always have the best hotel guarantee best price of Europe.</p>
                            </div>
                            <div class="uk-card-media-bottom">
                                <img src="asset/img/hh1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
    </div>
                <br>
                <br>
<div class="uk-container">

    <h1>Your pics of your visit at our Hotel partners it's important for us</h1>
        <div class="uk-text-center">
            <p>All of pics with our hashtag #hotelcard in Instagram</p><span uk-icon="instagram"></span>
        </div>
    <hr>
{{--        <div class='sk-ww-instagram-hashtag-feed' data-embed-id='33947'>--}}
    <div class='sk-ww-instagram-hashtag-feed' data-embed-id='34001'></div>
        </div>
    <br>
    <br>
</div>
                <footer class="uk-card-secondary">
                    <nav class="uk-container uk-navbar">
                        <div class="footer-container">
                            <p>
                                LaravelProject1 by Cem
                            </p>
                        </div>
                    </nav>
                </footer>
                <script src='https://www.sociablekit.com/app/embed/instagram-hashtag-feed/widget.js'></script>
{{--                <script src='https://www.sociablekit.com/app/embed/instagram-hashtag-feed/widget.js'></script>--}}
    </body>
</html>
