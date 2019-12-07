<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>DenisD3D</title>
    @include('include.head')
    <link rel="stylesheet" href="{{ URL::asset('css/contact.css') }}">
</head>
<body>
@include('include.navbar')
    <div class="contact-form" style="min-height: 80vh;">

        <form action="{{ url('contact') }}" method="post">
            @csrf
            <h2 class="text-center">Contact me</h2>
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                </div>
            @endif
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea>
                <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>
    </div>
@include('include.footer')
</body>
</html>
