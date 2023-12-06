@extends('master')

@section('title', 'Data Pensil')


@section('konten')

    <h3>Edit Pensil</h3>

    <a href="/pensil"> Kembali</a>

    <br />
    <br />

    @foreach ($pensil as $p)
        <form action="/pensil/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" name="kode" value="{{ $p->kode_pensil }}"> <br />

            <div>
                <table>
                    <tr>
                        <td class="pr-5">Merk</td>
                        <td><input type="text" required="required" name="merk" value="{{ $p->merk_pensil }}"></td>
                    </tr>
                    <tr>
                        <td class="pr-5">Stock</td>
                        <td><input type="text" required="required" name="stock" value="{{ $p->stock_pensil }}"></td>
                    </tr>
                    <tr>
                        <td class="pr-5">Tersedia</td>
                        <td><input type="text" required="required" name="tersedia" value="{{ $p->tersedia }}"></td>
                    </tr>
                </table>
                <input type="submit" value="Simpan Data">
            </div>

        </form>
    @endforeach

@endsection
