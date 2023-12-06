@extends('master')

@section('title', 'Data Pensil')


@section('konten')

    <h3>View Pensil</h3>

    <a href="/pensil"> Kembali</a>

    <br />
    <br />

    <div class="row">
        <div class="col-6">
            <div style="width: 100%; height: 500px; border: 2px solid black;"></div>
        </div>

        <div class="col-6 d-flex align-items-center"
            @foreach ($pensil as $p)

                <form action="/pensil/viewpensil" method="post" class="form-horizontal">
                    {{ csrf_field() }}

                    <div>
                        <table>
                            <tr>
                                <td class="pr-5">Merk: </td>
                                <td>{{ $p->merk_pensil }}</td>
                            </tr>
                            <tr>
                                <td class="pr-5">Stock: </td>
                                <td>{{ $p->stock_pensil }}</td>
                            </tr>
                            <tr>
                                <td class="pr-5">Tersedia: </td>
                                <td>{{ $p->tersedia }}</td>
                            </tr>
                        </table>
                        <a href="/pensil" class="btn btn-success">OK</a>
                    </div>

            </form> @endforeach
            </div>
        </div>

    @endsection
