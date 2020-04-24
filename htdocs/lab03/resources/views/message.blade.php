@extends('index')

@section('title', 'message')

@section('content')
    <h1>Hi there!!!</h1>
    <p>You bought: {{ $name }}</p>
    <p>{{ $additional }}</p>
    <a href="/product">Watch Product Info</a>
@endsection
