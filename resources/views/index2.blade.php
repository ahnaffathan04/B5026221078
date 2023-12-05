@extends('master')

@section('title', 'Data Pensil')


@section('konten')

    <h3>Data Pensil</h3>


    <a href="/pensil/tambah" class="btn btn-primary"> + Tambah kode Pensil baru</a>

    <br />
    <p>Cari Data Pensil berdasarkan Kode:</p>
    <form action="/pensil/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Kode Pensil .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
        </tr>
        @foreach ($pensil as $p)
            <tr>
                <td>{{ $p->merk_pensil }}</td>
                <td>{{ $p->stock_pensil }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>
                    <a href="/pensil/view/{{ $p->kode_pensil }}" class="btn btn-success">View</a>
                    |
                    <a href="/pensil/edit/{{ $p->kode_pensil }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pensil/hapus/{{ $p->kode_pensil }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br/>

@endsection
