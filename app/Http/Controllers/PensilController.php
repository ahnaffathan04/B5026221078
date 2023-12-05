<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
    public function index2()
	{
    	// mengambil data dari table pensil
		// $pensil = DB::table('pensil')->get();
        $pensil = DB::table('pensil')
                    ->orderBy('merk_pensil', 'asc');

    	// mengirim data pensil ke view index
		return view('index2',['pensil' => $pensil]);

	}

    // method untuk menampilkan view form tambah pensil
	public function tambah()
	{
		// memanggil view tambah
		return view('tambah');
	}

    // method untuk insert data ke table pensil
	public function store(Request $request)
	{
		// insert data ke table [pensil]
		DB::table('pensil')->insert([
			'merk_pensil' => $request->merk,
			'stock_pensil' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pensil');
	}

    // method untuk edit data pensil
	public function edit($kode)
	{
		// mengambil data pensil berdasarkan kode yang dipilih
		$pensil = DB::table('pensil')->where('kode_pensil',$kode)->get();
		// passing data pensil yang didapat ke view edit.blade.php
		return view('edit',['pensil' => $pensil]);
	}

    // update data pensil
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pensil')->where('kode_pensil',$request->id)->update([
			'merk_pensil' => $request->merk,
			'stock_pensil' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pensil');
	}

    // method untuk hapus data pensil
	public function hapus($kode)
	{
		// menghapus data pensil berdasarkan kode yang dipilih
		DB::table('pensil')->where('kode_pensil',$kode)->delete();

		// alihkan halaman ke halaman pensil
		return redirect('/pensil');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pensil sesuai pencarian data
		$pensil = DB::table('pensil')
		            ->where('merk_pensil','like',"%".$cari."%")
		            ->paginate();

    	// mengirim data pensil ke view index
		return view('index2',['pensil' => $pensil, 'cari' => $cari]);
	}

    // method untuk menampilkan view form tambah pensil
	public function view($kode)
	{
		// mengambil data pensil berdasarkan kode yang dipilih
		$pensil = DB::table('pensil')->where('kode_pensil',$kode)->get();
		// passing data pensil yang didapat ke view view.blade.php
		return view('view',['pensil' => $pensil]);

	}
}
