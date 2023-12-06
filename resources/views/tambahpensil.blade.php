@extends('master')

@section('title', 'Data Pensil')


@section('konten')

    <h3>Data Pensil</h3>

    <a href="/pensil"> Kembali</a>

    <br />
    <br />

    <form action="/pensil/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div>
            <table>
                <tr>
                    <td class="pr-5">Merk</td>
                    <td><input type="text" name="merk"></td>
                </tr>
                <tr>
                    <td class="pr-5">Stock</td>
                    <td><input type="text" name="stock"></td>
                </tr>
                <tr>
                    <td class="pr-5">Tersedia</td>
                    <td><input type="text" name="tersedia"></td>
                </tr>
            </table>
            <input type="submit" value="Simpan Data">
        </div>

    </form>



@endsection
