@extends('app')

@section('content')
    <div class="card">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card-header">
            <h4 class="mb-0">Data Buku Tamu</h4>
            <a href="{{ url('admin/form-tambah') }}" class="btn btn-success float-right">Tambah Data</a>
        </div>

        <div class="card-body">
            <div class="table-responsive"> <!-- Membuat tabel responsif -->
                <table class="table table-bordered table-hover" id="myTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Keperluan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Email</th>
                            <th scope="col" style="width: 15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tlp }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->keperluan }}</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($item->created_at)->timezone('Asia/Jakarta')->locale('id')->translatedFormat('l, d F Y H:i:s') }}
                                </td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ url('admin/form-edit', $item->id) }}" 
                                           onclick="return confirm('Serius Mau Berubah?');" 
                                           class="btn btn-warning btn-sm mx-1" title="Ubah">
                                           <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ url('admin/hapus-data') }}" method="post"
                                              onclick="return confirm('Mau Di Ilangin?');" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-danger btn-sm mx-1" title="Hapus">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "responsive": true, // Menambahkan fitur responsif
            });
        });
    </script>
@endsection
