<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutController extends Controller
{
    public static function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['sub_title'] = '';
        return view('Contents.dashboard', $data);
    }

    public static function pengaduan()
    {
        $data['title'] = 'Pengaduan';
        $data['sub_title'] = '';
        return view('Contents.Pengaduan.index', $data);
    }
}
