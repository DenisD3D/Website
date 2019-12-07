<nav class="navbar navbar-light navbar-expand-md navigation">
    <div class="container"><a class="navbar-brand" href="/"><img id="logo" src="img/logo.svg"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto" style="font-size: larger;">
                <li class="nav-item" role="presentation"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/projects">Projects</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ config('social_links.github') }}"><i class="fab fa-github"></i></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ config('social_links.twitter') }}"><i class="fab fa-twitter"></i></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ config('social_links.discord') }}"><i class="fab fa-discord"></i></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ config('social_links.mail') }}"><i class="fas fa-envelope"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
