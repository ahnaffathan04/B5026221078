@extends('master')

@section('title', 'Data Bos')


@section('konten')

    <h3>Data Bos</h3>

    <a href="/bos"> Kembali</a>

    <br />
    <br />

    <form action="/bos/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div>
            <table>
                <tr>
                    <td class="pr-5">Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td class="pr-5">Jabatan</td>
                    <td><input type="text" name="jabatan"></td>
                </tr>
                <tr>
                    <td class="pr-5">Umur</td>
                    <td><input type="number" name="umur"></td>
                </tr>
                <tr>
                    <td class="pr-5">Alamat</td>
                    <td>
                        <textarea name="alamat"></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Simpan Data">
        </div>

    </form>



@endsection
