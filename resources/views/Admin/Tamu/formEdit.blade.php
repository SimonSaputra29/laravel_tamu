@extends('app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 40%">
            <div class="card-header">
              Form Edit Buku Tamu
            </div>
            <div class="card-body">
                <form action="{{url('admin/update-data')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="">Nama</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                      <input type="text" name="nama" onkeypress="return hanyaHuruf(event);" id="nama" aria-describedby="nama" value="{{$data->nama}}" class="form-control" placeholder="Nama" required>
                      <script type="text/javascript">
                          function hanyaHuruf(evt) {
                              var charCode = (evt.which) ? evt.which : event.keyCode;
                              
                              if ((charCode > 64 && charCode < 91) || // huruf besar A-Z
                                  (charCode > 96 && charCode < 123) || // huruf kecil a-z
                                  charCode == 8 || // backspace
                                  charCode == 32 || // spasi
                                  charCode == 0) { // karakter khusus, misalnya arrow keys
                                  return true;
                              } else {
                                  return false;
                              }
                          }
                      </script>
                  </div>
                  
                    <div class="form-group">
                      <label for="telepon">Telepon</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                      <input type="number" class="form-control" name="telepon" id="telepon" aria-describedby="telepon" value="{{$data->tlp}}" >
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-home"></i></span>
                        </div>
                      <input type="textarea" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" value="{{$data->alamat}}">
                    </div>
                    <div class="form-group">
                      <label for="keperluan">Keperluan</label>
                      <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-file-text"></i></span>
                          </div>
                          <input type="text" class="form-control" name="keperluan" id="keperluan" aria-describedby="keperluan" value="{{$data->keperluan}}">
                      </div>
                  </div>
                                         
                    <div class="form-group">
                      <label for="email">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>

                      <input type="email" class="form-control" name="email" id="email" aria-describedby="email" value="{{$data->email}}">

                    </div>
                    <br>
                    <input type="hidden" value="{{$data->id}}" name="id">
                    
                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </div>
          </div>
    </div>
@endsection