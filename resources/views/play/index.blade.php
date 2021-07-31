@include('layout/header') 
<div class="my-4 mx-5">
    <h2>Riwayat memainkan Lagu</h2>
    @if (@$_GET['mainkan']=='true')
    <div class="card text-white bg-secondary mb-3" style="width: 100%">
        <div class="card-header">Berhasil</div>
        <div class="card-body">
            <h5 class="card-title">Track berhasil dimainkan</h5>
        </div>
    </div>
    @endif
    <a href="{{ url('/track') }}" type="button" class="btn btn-primary float-right mb-4">Mainkan Lagu</a>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Artis</th>
        <th scope="col">Nama Album</th>
        <th scope="col">Nama Track</th>
        <th scope="col">Waktu dimainkan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($played as $track)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $track->artist_name }}</td>
                <td>{{ $track->album_name }}</td>
                <td>{{ $track->track_name }}</td>
                <td>{{ $track->time }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@include('layout/footer') 