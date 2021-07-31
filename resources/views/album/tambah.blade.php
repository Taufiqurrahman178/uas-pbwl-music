@include('layout/header') 
<div class="my-4 mx-5">
    <h2>Tambah Album</h2>
    <form method="POST" action="/album/tambah">
        @csrf
        <div class="form-group mt-4">
            <label for="namaArtist">Nama Artist</label>
            <select name="artist_id" class="form-control" id="namaArtist">
                    @foreach ($artists as $artist)
                    <option value="{{$artist->artist_id}}">{{$artist->artist_name}}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="namaAlbum">Nama Album</label>
            <input type="text" class="form-control" id="namaAlbum" name="album_name" placeholder="Masukkan nama Album">
        </div>
        <input type="submit" class="btn btn-primary mt-4" value="Tambah Album" />
    </form>

</div>
@include('layout/footer') 