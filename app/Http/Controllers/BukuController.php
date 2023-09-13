<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#untuk memanggil model buku yang sudah dibuat
use App\Models\Buku;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data_buku = Buku::all()->sortByDesc('id');
        $no = 0;
        $hitung = Buku::count(); // Menghitung jumlah buku

        return view('buku.index', compact('data_buku', 'hitung', 'no'));
    }
}


    
