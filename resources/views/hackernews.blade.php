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
                    <a class="uk-navbar-item uk-logo" href="/"><img src="asset/img/logo2.png"  width="60px"></a>
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
    </div>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>

