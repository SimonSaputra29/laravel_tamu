<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;    

class TamuController extends Controller
{
    public function index() {
        $data = BukuTamu::all();

        return view('Admin.Tamu.index', compact('data'));
    }

    public function formTambah() {
        return view('Admin.Tamu.formTambah');
    }

    public function simpanData(Request $request) {
        $nama       = $request -> nama;  
        $telepon    = $request -> telepon;
        $alamat     = $request -> alamat;
        $email      = $request -> email;

        $data = new BukuTamu;
        $data ->nama = $nama;
        $data ->tlp = $telepon;
        $data ->alamat = $alamat;
        $data ->email = $email;
        $data ->password = Hash::make('rahasia');

        $data->save();

        return redirect('admin/tamu')->with('status', 'Data Berhasil Di Simpan');

    }
    public function formEdit($id) {
        $data = BukuTamu::find($id);
        return view('Admin.Tamu.formEdit', compact('data'));
    }

    public function updateTamu(Request $request) {
        $id = $request->id;
        $nama = $request->nama;
        $telepon = $request->telepon;
        $alamat = $request->alamat; 
        $email = $request->email;

        $data = BukuTamu::find($id);    
        $data ->nama = $nama;
        $data ->tlp = $telepon;
        $data ->alamat = $alamat;
        $data ->email = $email;
        $data ->update();

        return redirect('admin/tamu')->with('status', 'Data Berhasil Di Ubah');

        
    }

    public function hapusTamu(Request $request){
            $id = $request ->id; 
            $data = BukuTamu::find($id); 
            $data->delete();
            return redirect('admin/tamu')->with('status', 'Data Berhasil Di Hapus');
        }
}   
