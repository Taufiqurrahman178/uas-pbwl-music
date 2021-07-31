@include('layout/header') 
<div class="my-4 mx-5">
    <h2>Daftar Album</h2>
    <a href="{{ url('/album/tambah') }}" type="button" class="btn btn-primary float-right mb-4">Tambah Album</a>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Artis</th>
        <th scope="col">Nama Album</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($albums as $album)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $album->artist_name }}</td>
                <td>{{ $album->album_name }}</td>
                <td>
                    <a href="{{ url('/album/ubah/' . $album->album_id) }}" type="button" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('Yakin ingin menghapus Album ini?');" href="{{ url('/album/hapus/' . $album->album_id) }}" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@include('layout/footer') 