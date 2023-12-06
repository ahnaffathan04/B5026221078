@extends('master')

@section('title', 'Data Pegawai')


@section('konten')

    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />

            <div>
                <table>
                    <tr>
                        <td class="pr-5">Nama</td>
                        <td><input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"></td>
                    </tr>
                    <tr>
                        <td class="pr-5">Jabatan</td>
                        <td><input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"></td>
                    </tr>
                    <tr>
                        <td class="pr-5">Umur</td>
                        <td><input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"></td>
                    </tr>
                    <tr>
                        <td class="pr-5">Alamat</td>
                        <td>
                            <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Simpan Data">
            </div>

        </form>
    @endforeach

@endsection
