@include('layout/header') 
<div class="my-4 mx-5">
    <h2>Daftar Artis</h2>
    <a href="{{ url('/artist/tambah') }}" type="button" class="btn btn-primary float-right mb-4">Tambah Artis</a>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Artis</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($artists as $artist)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $artist->artist_name }}</td>
                <td>
                    <a href="{{ url('/artist/ubah/' . $artist->artist_id) }}" type="button" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('Yakin ingin menghapus artis ini?');" href="{{ url('/artist/hapus/' . $artist->artist_id) }}" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@include('layout/footer') 