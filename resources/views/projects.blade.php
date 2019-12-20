<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>DenisD3D</title>
    @include('include.head')
    <link rel="stylesheet" href="{{ URL::asset('css/projects.css') }}">
</head>
<body>
@include('include.navbar')
<div class="projects-box">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">My projects</h2>
        </div>
        <div class="row features">
            @foreach(config('projects') as $project)
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="card border-white border rounded shadow-lg" id="project-card" style="height: 350px; margin: 10px 15px;">
                        <div class="card-body" style="height: 350px;padding: 0px;margin: 10px;"><img class="d-lg-flex m-auto align-items-lg-center" style="height: 115.31px;margin-left: 0px;padding-left: 0px;object-fit: contain;" src="{{ $project['img'] }}">
                            <h4 class="card-title" style="margin-top: 5px;">{{ $project['name'] }}</h4>
                            <h6 class="card-subtitle mb-2" style="margin-top: 0px; color: #7d8285">{{ $project['type'] }}</h6>
                            <p class="card-text" style="margin-top: 15px;margin-bottom: 20px;">{{ $project['desc'] }}<br></p>
                            <div class="btn-group" role="group">
                                @if(isset($project['info']) && $project['info'] != "")
                                    <button class="btn btn-primary btn-secondary" data-bs-hover-animate="pulse" type="button" style="background-color: rgb(213,76,17);">
                                        <a href="{{ $project['info'] }}" style="background-color: inherit;color: inherit;text-decoration: inherit;">Info / <i class="fas fa-download"></i></a>
                                    </button>
                                @endif
                                @if(isset($project['github']) && $project['github'] != "")
                                    <button class="btn btn-primary" data-bs-hover-animate="pulse" type="button" style="margin-left: 7px; background-color: rgb(72,72,72);">
                                        <a href="{{ $project['github'] }}" style="background-color: inherit;color: inherit;text-decoration: inherit;">GITHUB<br></a>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('include.footer')
</body>
</html>
