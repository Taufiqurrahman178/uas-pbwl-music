@include('layout/header') 
<div style="text-align:center; margin-top: 200px;">
    <h1 style="font-weight: bold;">
        UAS PBWL MUSIC
    </h1>
    <h2>Oleh Taufiqurrahman Nasution</h2>
    <h2>NIM : 0702183178</h2>
    <div style="margin-top: 50px;">
        <a href="{{ url('/artist') }}" type="button" class="btn btn-primary">Artis</a>
        <a href="{{ url('/album') }}" type="button" class="btn btn-success">Album</a>
        <a href="{{ url('/track') }}" type="button" class="btn btn-primary">Track</a>
        <a href="{{ url('/play') }}" type="button" class="btn btn-success">Played</a>
    </div>
</div>
@include('layout/footer') 