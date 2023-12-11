<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
	public function indexkeranjangbelanja()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get(); //ini kalo ga pake paginate
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
    	// mengirim data pegawai ke view index
		return view('indexkeranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function beli()
	{
		// memanggil view tambah
		return view('beli');
	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'kodeBarang' => $request->kodeBarang,
			'jumlah' => $request->jumlah,
			'harga' => $request->harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data pegawai
	public function batal($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('id',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

}
