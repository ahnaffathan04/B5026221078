
@extends('master')
@section('title','Chat Pesan')
@section('konten')

<div class="container">
    @foreach($chat as $c)
        <p class="h-100">{!! $c->chat_pesan !!}</p>
    @endforeach
</div>

@endsection
