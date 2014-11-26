@extends('layouts.master')

@section('content')

    @foreach ($tuks as $tuk)
        {{{ $tuk->text }}}<br/>
    @endforeach
   
@stop