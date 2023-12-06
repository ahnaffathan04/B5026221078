@extends('master')

@section('title', 'Data Pegawai')


@section('konten')

    <h3>Data Pensil</h3>

    <a href="/pensil/tambahpensil" class="btn btn-primary"> + Tambah Pensil Baru</a>

    <br />
    <p>Cari Data Pensil berdasarkan Merk:</p>
    <form action="/pensil/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Pensil .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pensil as $p)
            <tr>
                <td>{{ $p->merk_pensil }}</td>
                <td>{{ $p->stock_pensil }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>
                    <a href="/pensil/viewpensil/{{ $p->kode_pensil }}" class="btn btn-success">View</a>
                    |
                    <a href="/pensil/editpensil/{{ $p->kode_pensil }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pensil/hapus/{{ $p->kode_pensil }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br/>

@endsection
