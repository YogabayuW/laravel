@extends('coba.main')
@section('konten')
    <!--Menggunakan Blade Engine-->
    {{$chanelNames}}<br>
    {{!!$chanelDescriptions!!}}<br>
    @foreach ($articles as $value)
        {{$value}}<br>
    @endforeach
@endsection