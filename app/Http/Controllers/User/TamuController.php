<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function simpanTamu(Request $request) {
        $nama               = $request->nama;
        $telepon            = $request->telepon;
        $alamat             = $request->alamat;
        $keperluan          = $request->keperluan;
        $email              = $request->email;

        
        $data = new BukuTamu();
        $data ->nama = $nama;
        $data ->tlp = $telepon;
        $data ->alamat = $alamat;
        $data ->keperluan = $keperluan;
        $data ->email = $email;
        $data ->password = Hash::make('rahasia');
        $data -> save();

        return redirect('/')->with('status', 'Data Berhasil Di Simpan');
        
        
    }
}
