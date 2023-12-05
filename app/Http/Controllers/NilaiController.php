<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function index3()
	{
    	// mengambil data dari table nilaikuliah
		// $nilaikuliah = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')
                    ->orderBy('NRP', 'asc')->get();

        foreach($nilaikuliah as $n){
            switch(true){
                case($n->Nilai_Angka >= 81):
                $n->NilaiHuruf = 'A';
                break;
                case($n->Nilai_Angka >= 61):
                $n->NilaiHuruf = 'B';
                break;
                case($n->Nilai_Angka >= 41):
                $n->NilaiHuruf = 'C';
                break;
                default:
                $n->NilaiHuruf = 'D';
                break;
            }
            
        $n->Bobot = $n->Nilai_Angka * $n->SKS;
        }

    	// mengirim data niilaikuliah ke view index
		return view('index3',['nilaikuliah' => $nilaikuliah]);
	}

    // method untuk menampilkan view form tambah pegawai
	public function tambahdata()
	{
	// memanggil view tambah
	return view('tambahdata');
	}


	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'Nilai_Angka' => $request->Nilai_Angka,
			'SKS' => $request->SKS,
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilai');
	}

}
