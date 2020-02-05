<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {!! NoCaptcha::renderJs() !!}
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

        <br>
        <br>

        <div class="container box" style="padding-top: 19px">
    <h3 align="center">Contact Us for any information</h3><br />
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <form method="post" action="{{url('sendemail/send')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Enter Your Name</label>
            <input type="text" name="name" class="form-control" value="" />
        </div>
        <div class="form-group">
            <label>Enter Your Email</label>
            <input type="text" name="email" class="form-control" value="" />
        </div>
        <div class="form-group">
            <label>Enter Your Message</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="send" class="btn btn-info" value="Send" />
        </div>
        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Captcha</label>
            <div class="col-md-6">
                {!! app('captcha')->display() !!}
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
    </form>

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
</body>
</html>
