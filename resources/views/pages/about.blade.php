@extends('layout')

@section( 'title', $title )

@section('content')
    <h1>About: {{ $name }} </h1>

    <p>
        {{ $firstName }} {{ $lastName }}
    </p>
@stop