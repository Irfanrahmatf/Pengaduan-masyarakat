<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PenggunaController extends Controller
{
    public static function index()
    {
        $data['title'] = 'Pengguna';
        $data['sub_title'] = 'Daftar Pengguna';
        $data['Pengguna'] = User::all();
        return view('Contents.pengguna.index', $data);
    }
    public static function tambah()
    {
        $data['title'] = 'Tambah Pengguna';
        $data['sub_title'] = 'Form Input Pengguna';
        return view('Contents.pengguna.tambah', $data);
    }
}
