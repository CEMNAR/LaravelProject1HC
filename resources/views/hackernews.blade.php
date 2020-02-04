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
                    <a class="uk-navbar-item uk-logo" href="/"><img src="asset/img/logo2.png"  width="60px"></a>
                    <li>
                        <a href="hackernews">Blog Hackernews</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

<div class="uk-container">
        <h1>Api Hackernews</h1>
        <h3>Check now all of latest news of the Hackernews Website.</h3>
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>

@foreach ($articles as $article)

        <div>

            <div class="uk-card uk-card-small uk-card-secondary">

                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title">{{ $article->title }}</h3>
                            <p class="uk-text-meta uk-margin-remove-top">{{ $article->time_ago }}</p>
                        </div>
                    </div>
                </div>

                <div class="uk-card-body">
                    <p>User : {{ $article->user }}</p>
                    <p>Number of points : {{ $article->points }}</p>
                    <p>Comments {{ $article->comments_count }}</p>
                </div>

                <div class="uk-card-footer">
                    <a href="{{ $article->url }}" class="uk-button uk-button-text"><h5>Click here for access to article</h5></a>
                </div>

            </div>

        </div>

@endforeach
</div>
    </div>
        <br>
        <br>
        <br>
            <footer class="uk-card-secondary">
                <nav class="uk-container uk-navbar">
                    <div class="footer-container">
                        <p>
                            LaravelProject1 by Cem
                        </p>
                    </div>
                </nav>
            </footer>

<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/js/uikit-icons.min.js"></script>
