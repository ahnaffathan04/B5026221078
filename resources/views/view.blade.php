@extends('master')

@section('title', 'Data Pegawai')


@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <div class="row">
        <div class="col-6">
            <div style="width: 100%; height: 500px; border: 2px solid black;"></div>
        </div>

        <div class="col-6 d-flex align-items-center"
            @foreach ($pegawai as $p)

                <form action="/pegawai/view" method="post" class="form-horizontal">
                    {{ csrf_field() }}

                    <div>
                        <table>
                            <tr>
                                <td class="pr-5">Nama: </td>
                                <td>{{ $p->pegawai_nama }}</td>
                            </tr>
                            <tr>
                                <td class="pr-5">Jabatan: </td>
                                <td>{{ $p->pegawai_jabatan }}</td>
                            </tr>
                            <tr>
                                <td class="pr-5">Umur: </td>
                                <td>{{ $p->pegawai_umur }}</td>
                            </tr>
                            <tr>
                                <td class="pr-5">Alamat: </td>
                                <td>{{ $p->pegawai_alamat }}</td>
                            </tr>
                        </table>
                        <a href="/pegawai" class="btn btn-success">OK</a>
                    </div>

            </form> @endforeach
            </div>
        </div>

    @endsection
