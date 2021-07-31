@include('layout/header') 
<div class="my-4 mx-5">
    <h2>Edit Track</h2>
    <input type="hidden" id="tokenGA" value="{{ csrf_token() }}">
    <form method="POST" action="/track/ubah/{{$track->track_id}}">
        @csrf
        <div class="form-group mt-4">
            <label for="namaArtist">Nama Artist</label>
            <select name="artist_id" class="form-control" id="namaArtist">
                    @foreach ($artists as $artist)
                    <option value="{{$artist->artist_id}}" @if($artist->artist_id == $track->artist_id) selected @endif>{{$artist->artist_name}}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="namaAlbum">Nama Album</label>
            <select name="album_id" class="form-control" id="namaAlbum">
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="namaTrack">Nama Track</label>
            <input type="text" class="form-control" id="namaTrack" name="track_name" value="{{$track->track_name}}" placeholder="Masukkan nama Track">
        </div>
        <div class="form-group mt-4">
            <label for="namaWaktu">Waktu</label>
            <input type="number" class="form-control" id="namaWaktu" name="time" min="0" step="0.1" value="{{$track->time}}" placeholder="Masukkan Waktu">
        </div>
        <input type="submit" class="btn btn-primary mt-4" value="Ubah Album" />
    </form>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
            function getAlbum(val){
                $.ajax({
                  url: "{{ url('/track/get_album') }}",
                  method: 'post',
                  data: {
                    "_token" : $('#tokenGA').val(),
                    "artist_id" : val
                  },
                  success: function(result){
                     const data = JSON.parse(result);
                     let firstI = true;
                     data.forEach(element => {
                         if(firstI){
                             $('#namaAlbum')
                                .find('option')
                                .remove()
                                .end()
                                .append('<option value="' + element.album_id + '">' + element.album_name +'</option>')
                                .val(element.album_id);
                            firstI = false;
                         }else{
                            $("#namaAlbum").append(new Option(element.album_name, element.album_id));
                         }
                     });
                  }});
            }
            $(document).ready(function(){
                getAlbum($("#namaArtist option:first").val())
                $('#namaArtist').on('change', function() {
                    getAlbum(this.value)
                });
            });
    </script>
</div>
@include('layout/footer') 