@extends('master')

@section('title', 'Data Pegawai')


@section('konten')

    <h3>Data Nilai Kuliah</h3>

    <a href="/nilai"> Kembali</a>

    <br />
    <br />

    <form action="/nilai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div>
            <table>
                <tr>
                    <td class="pr-5">ID</td>
                    <td><input type="text" name="ID"></td>
                </tr>
                <tr>
                    <td class="pr-5">NRP</td>
                    <td><input type="text" name="NRP"></td>
                </tr>
                <tr>
                    <td class="pr-5">Nilai Angka</td>
                    <td><input type="text" name="Nilai_Angka"></td>
                </tr>
                <tr>
                    <td class="pr-5">SKS</td>
                    <td><input type="text" name="SKS"></td>
                </tr>
            </table>
            <a href="/nilai"> <input type="submit" value="Simpan Data">
            </a>
        </div>

    </form>

@endsection
