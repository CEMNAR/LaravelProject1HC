

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <div class="uk-position-relative">
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
                    <img src="https://res.cloudinary.com/dckopexak/image/upload/v1580894467/hotel1_epcrcm.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h2 class="uk-margin-remove">HOTELCARD</h2>
                        <p class="uk-margin-remove">Hotelcard is a worldwide novelty in the tourism industry. With a Hotelcard membership you can save 50% on hotel bookings.</p>
                            <p> Explore over 700 hotels in the most beautiful regions and book as often as you like and stay as many nights as you wish.</p>
                    </div>
                </li>
                <li>
                    <img src="https://res.cloudinary.com/dckopexak/image/upload/v1580894467/hotel2_cqbwzz.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h2 class="uk-margin-remove">600 Top-Hotels zum halben Preis</h2>
                        <p class="uk-margin-remove">Mit Hotelcard übernachten Sie in über 600 Hotels in der Schweiz, in Deutschland, Österreich und Italien und können die angebotenen Suiten, Familien, Doppel- und Einzelzimmer beliebig oft zum halben Preis buchen.</p>
                    </div>
                </li>
                <li>
                    <img src="https://res.cloudinary.com/dckopexak/image/upload/v1580894467/hotel3_i1oss6.jpg" alt="" uk-cover>
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
                                <img src="https://res.cloudinary.com/dckopexak/image/upload/v1580894467/hh2_ksxmel.jpg">
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
                                <img src="https://res.cloudinary.com/dckopexak/image/upload/v1580894467/hh1_k0nats.jpg" alt="">
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
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
