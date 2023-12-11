@extends('master')

@section('title', 'Data Bos')


@section('konten')

    <h3>Edit Bos</h3>

    <a href="/bos"> Kembali</a>

    <br />
    <br />

    @foreach ($bos as $p)
        <form action="/bos/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $p->bos_id }}"> <br />

            <div>
                <table>
                    <tr>
                        <td class="pr-5">Nama</td>
                        <td><input type="text" required="required" name="nama" value="{{ $p->bos_nama }}"></td>
                    </tr>
                    <tr>
                        <td class="pr-5">Jabatan</td>
                        <td><input type="text" required="required" name="jabatan" value="{{ $p->bos_jabatan }}"></td>
                    </tr>
                    <tr>
                        <td class="pr-5">Umur</td>
                        <td><input type="number" required="required" name="umur" value="{{ $p->bos_umur }}"></td>
                    </tr>
                    <tr>
                        <td class="pr-5">Alamat</td>
                        <td>
                            <textarea required="required" name="alamat">{{ $p->bos_alamat }}</textarea>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Simpan Data">
            </div>

        </form>
    @endforeach

@endsection
