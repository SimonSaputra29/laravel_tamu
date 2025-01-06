@extends('app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card shadow-lg" style="width: 100%; max-width: 600px;">
            <div class="card-header bg-primary text-white text-center">
                <h4>Form Edit Buku Tamu</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/update-data') }}" method="post">
                    @csrf

                    {{-- Input Nama --}}
                    <div class="form-group">
                        <label for="nama" class="font-weight-bold">Nama</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama"
                                value="{{ $data->nama }}" onkeypress="return hanyaHuruf(event);" required>
                        </div>
                    </div>

                    {{-- Script untuk hanya huruf --}}
                    <script type="text/javascript">
                        function hanyaHuruf(evt) {
                            var charCode = evt.which ? evt.which : event.keyCode;
                            if (
                                (charCode > 64 && charCode < 91) || // Huruf besar A-Z
                                (charCode > 96 && charCode < 123) || // Huruf kecil a-z
                                charCode === 8 || // Backspace
                                charCode === 32 || // Spasi
                                charCode === 0 // Arrow keys atau karakter khusus lainnya
                            ) {
                                return true;
                            } else {
                                return false;
                            }
                        }
                    </script>

                    {{-- Input Telepon --}}
                    <div class="form-group">
                        <label for="telepon" class="font-weight-bold">Telepon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" name="telepon" id="telepon"
                                value="{{ $data->tlp }}" required>
                        </div>
                    </div>

                    {{-- Input Alamat --}}
                    <div class="form-group">
                        <label for="alamat" class="font-weight-bold">Alamat</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white"><i class="fa fa-home"></i></span>
                            </div>
                            <input type="text" class="form-control" name="alamat" id="alamat"
                                value="{{ $data->alamat }}" required>
                        </div>
                    </div>

                    {{-- Input Keperluan --}}
                    <div class="form-group">
                        <label for="keperluan" class="font-weight-bold">Keperluan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white"><i class="fa fa-pencil-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" name="keperluan" id="keperluan"
                                value="{{ $data->keperluan }}" required>
                        </div>
                    </div>

                    {{-- Input Email --}}
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ $data->email }}" required>
                        </div>
                    </div>

                    {{-- Hidden Input untuk ID --}}
                    <input type="hidden" name="id" value="{{ $data->id }}">

                    <div class="d-flex justify-content-center mt-4 flex-column flex-sm-row">
                        {{-- Tombol Kembali --}}
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-1 w-100 w-sm-auto">Kembali</a>

                        {{-- Tombol Simpan --}}
                        <button type="submit" class="btn btn-success px-5 py-2 mt-1 ml-0 ml-sm-3 w-100 w-sm-auto">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
