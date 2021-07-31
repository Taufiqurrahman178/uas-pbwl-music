<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>UAS PBWL MUSIC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav">
      <li class="nav-item @if(Request::segment(1)=='') active @endif">
        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
      </li>
      <li class="nav-item @if(Request::segment(1)=='artist') active @endif">
        <a class="nav-link" href="{{ url('/artist') }}">Artist</a>
      </li>
      <li class="nav-item @if(Request::segment(1)=='album') active @endif">
        <a class="nav-link" href="{{ url('/album') }}">Album</a>
      </li>
      <li class="nav-item @if(Request::segment(1)=='track') active @endif">
        <a class="nav-link" href="{{ url('/track') }}">Track</a>
      </li>
      <li class="nav-item @if(Request::segment(1)=='play') active @endif">
        <a class="nav-link" href="{{ url('/play') }}">Riwayat</a>
      </li>
    </ul>
  </div>
    <a class="navbar-brand mx-auto order-0" href="#">UAS PBWL MUSIC<span class="navbar-text ml-2">
         oleh Taufiqurrahman Nasution
    </span></a>
    
</nav>