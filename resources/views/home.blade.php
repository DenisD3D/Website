<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>DenisD3D</title>
        @include('include.head')
        <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    </head>
    <body>
    @include('include.navbar')
        <div data-bs-parallax-bg="true" id="promo" style="height: 60vh;background-image: url(img/jumbotron.png);background-position: center;background-size: cover;">
            <div class="jumbotron">
                <img src="img/jumbotron-laptop.png" style="width: 50%;height: 5%;"></div>
            </div>
        </div>
        <div id="showcase-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><i class="fa fa-code icon-brand"></i>
                        <p>Application developpement</p>
                    </div>
                    <div class="col-md-4"><i class="fas fa-gamepad icon-brand" id="icon-minecraft-mod"></i>
                        <p>Minecraft mod developpement</p>
                    </div>
                    <div class="col-md-4"><i class="fas fa-envelope-open-text icon-brand"></i>
                        <p>Several open source codes</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="discord-contact">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Want to contact me ?</h2>
                    <p class="text-center">The best way is to join my discord ! Else you can use the <a href="/contact">contact form</a>.</p>
                </div>
                <div class="buttons"><a class="btn btn-primary" role="button" href="{{ config('social_links.discord') }}" style="font-size: 16px;"><i class="fab fa-discord" style="font-size: 16px;"></i><strong>&nbsp;DISCORD SERVER</strong><br></a></div>
            </div>
        </div>
    @include('include.footer')
    </body>
</html>
