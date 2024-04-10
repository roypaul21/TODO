<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/navdefault.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-light bg-transparent fixed-top" style="z-index: 4;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="/images/logo.svg" alt="" width="80" height="70">
          </a>
          <div class="d-flex">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Login
            </button>
          </div>
        </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include("home.LoginRegister")
    </div>

    @if (session()->has('success'))
    <div class="alert-msg" id="alert-msg">
        <p>{{session('success')}}</p>
        <button type="button" onclick="closeMsg()"><i class="fa-solid fa-xmark-large"></i></button>
    </div>
    @endif

    <div class="page--container">
        @yield("content")
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{url('js/loginRegister.js')}}"></script>
</body>
</html>


