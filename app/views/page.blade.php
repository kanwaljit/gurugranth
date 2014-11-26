@extends('layouts.master')

@section('content')

    @foreach ($tuks as $tuk)
        <p>{{{ $tuk->text }}}<p>
    @endforeach
   
@stop