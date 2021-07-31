@include('layout/header') 
<div class="my-4 mx-5">
    <h2>Edit Artis</h2>
    <form method="POST" action="/artist/ubah/{{$artist->artist_id}}">
        @csrf
        <div class="form-group mt-4">
            <label for="namaArtis">Nama Artis</label>
            <input type="text" class="form-control" id="namaArtis" name="artist_name" placeholder="Masukkan nama artis" value="{{$artist->artist_name}}">
        </div>
        <input type="submit" class="btn btn-primary mt-4" value="Ubah Artis" />
    </form>

</div>
@include('layout/footer') 