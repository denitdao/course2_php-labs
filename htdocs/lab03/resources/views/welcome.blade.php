@extends('index')

@section('title', 'welcome')

@section('content')
    <div class="title m-b-md">
        {{ $slogan }}
    </div>
    <div class="links">
        <a href="/sign-in">Sign in</a>
    </div>
@endsection
