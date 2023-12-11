@extends('master')

@section('title', 'Data Bos')


@section('konten')
    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>

    <h3>Data Bos</h3>


    <a href="/bos/tambahbos" class="btn btn-primary"> + Tambah Bos Baru</a>

    <br />
    <p>Cari Data Bos berdasarkan Nama:</p>
    <form action="/bos/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Bos .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($bos as $p)
            <tr>
                <td>{{ $p->bos_nama }}</td>
                <td>{{ $p->bos_jabatan }}</td>
                <td>{{ $p->bos_umur }}</td>
                <td>{{ $p->bos_alamat }}</td>
                <td>
                    <a href="/bos/viewbos/{{ $p->bos_id }}" class="btn btn-success">View</a>
                    |
                    <a href="/bos/editbos/{{ $p->bos_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/bos/hapus/{{ $p->bos_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br/>

	Halaman : {{ $bos->currentPage() }} <br/>
	Jumlah Data : {{ $bos->total() }} <br/>
	Data Per Halaman : {{ $bos->perPage() }} <br/>
    {{ $bos->links() }}

@endsection
