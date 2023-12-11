@extends('master')

@section('title', 'Data Bos')


@section('konten')

    <h3>View Bos</h3>

    <a href="/bos"> Kembali</a>

    <br />
    <br />

    <div class="row">
        <div class="col-6">
            <div style="width: 100%; height: 500px; border: 2px solid black;"></div>
        </div>

        <div class="col-6 d-flex align-items-center"
            @foreach ($bos as $p)

                <form action="/bos/view" method="post" class="form-horizontal">
                    {{ csrf_field() }}

                    <div>
                        <table>
                            <tr>
                                <td class="pr-5">Nama: </td>
                                <td>{{ $p->bos_nama }}</td>
                            </tr>
                            <tr>
                                <td class="pr-5">Jabatan: </td>
                                <td>{{ $p->bos_jabatan }}</td>
                            </tr>
                            <tr>
                                <td class="pr-5">Umur: </td>
                                <td>{{ $p->bos_umur }}</td>
                            </tr>
                            <tr>
                                <td class="pr-5">Alamat: </td>
                                <td>{{ $p->bos_alamat }}</td>
                            </tr>
                        </table>
                        <a href="/bos" class="btn btn-success">OK</a>
                    </div>

            </form> @endforeach
            </div>
        </div>

    @endsection
