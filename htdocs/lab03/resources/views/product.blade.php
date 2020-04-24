@extends('index')

@section('title', 'product')

@section('content')
    @if(count($list) > 0)
        @foreach($list as $name => $amount)
            <h1>Product</h1>
            <p>Name: {{ $name }}</p>
            <p>Amount: {{ $amount }}</p>
            <a href="/message/{{$name}}">buy</a>
            @if(!$loop->last)
                <hr>
            @endif
        @endforeach
    @endif
    <hr><a href="/product/{{ count($list) + 1 }}">Show more</a>
    <hr><a href="/">Home</a>
@endsection




