@extends('master')

@section('title', 'Data Pegawai')


@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />
    
    <form action="/pegawai/store" method="post" class="form-horizontal">
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
                    <td><textarea name="alamat"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="Simpan Data">
        </div>

    </form>



@endsection
