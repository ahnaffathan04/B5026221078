@extends('master')

@section('title', 'Niilai Kuliah')


@section('konten')

    <h3>Data Nilai Kuliah</h3>

    <a href="/nilai/tambahdata" class="btn btn-primary"> + Tambah Nilai Baru</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>

        </tr>
        @foreach ($nilaikuliah as $p)
            <tr>
                <td>{{ $p->ID }}</td>
                <td>{{ $p->NRP }}</td>
                <td>{{ $p->Nilai_Angka }}</td>
                <td>{{ $p->SKS }}</td>
                <td>{{ $p->NilaiHuruf }}</td>
                <td>{{ $p->Bobot }}</td>

            </tr>
        @endforeach
    </table>
    <br/>



@endsection
