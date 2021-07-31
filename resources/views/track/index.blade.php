@include('layout/header') 
<div class="my-4 mx-5">
    <h2>Daftar Track</h2>
    <a href="{{ url('/track/tambah') }}" type="button" class="btn btn-primary float-right mb-4">Tambah Track</a>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Artis</th>
        <th scope="col">Nama Album</th>
        <th scope="col">Nama Track</th>
        <th scope="col">Waktu</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tracks as $track)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $track->artist_name }}</td>
                <td>{{ $track->album_name }}</td>
                <td>{{ $track->track_name }}</td>
                <td>{{ $track->time }}</td>
                <td>
                    <a onclick="return confirm('Yakin ingin memainkan Track ini?');" href="{{ url('/track/mainkan/' . $track->track_id) }}" type="button" class="btn btn-success">Mainkan Lagu</a>
                    <a href="{{ url('/track/ubah/' . $track->track_id) }}" type="button" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('Yakin ingin menghapus Track ini?');" href="{{ url('/track/hapus/' . $track->track_id) }}" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@include('layout/footer') 