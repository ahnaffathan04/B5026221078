<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BosController extends Controller
{
	public function indexbos()
	{
        $bos = DB::table('bos')
                    ->orderBy('bos_nama', 'asc')
                    ->paginate(10);

    	// mengirim data pegawai ke view index
		return view('indexbos',['bos' => $bos]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahbos()
	{
		// memanggil view tambah
		return view('tambahbos');
	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('bos')->insert([
			'bos_nama' => $request->nama,
			'bos_jabatan' => $request->jabatan,
			'bos_umur' => $request->umur,
			'bos_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/bos');
	}

	// method untuk edit data pegawai
	public function editbos($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$bos = DB::table('bos')->where('bos_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editbos',['bos' => $bos]);
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('bos')->where('bos_id',$request->id)->update([
			'bos_nama' => $request->nama,
			'bos_jabatan' => $request->jabatan,
			'bos_umur' => $request->umur,
			'bos_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/bos');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('bos')->where('bos_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/bos');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$bos = DB::table('bos')
		            ->where('bos_nama','like',"%".$cari."%")
		            ->paginate();

    		// mengirim data pegawai ke view index
		return view('indexbos',['bos' => $bos, 'cari' => $cari]);
	}

    // method untuk menampilkan view form tambah pegawai
	public function viewbos($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$bos = DB::table('bos')->where('bos_id',$id)->get();
		// passing data pegawai yang didapat ke view view.blade.php
		return view('viewbos',['bos' => $bos]);

	}
}
