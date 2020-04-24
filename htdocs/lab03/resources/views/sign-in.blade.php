@extends('index')

@section('title', 'sign in')

@section('content')
    @component('errors')
    {{ $message ?? '' }}
    @endcomponent
    <form class="f20" method="POST" action="/sign-in">
        @csrf {{--security token--}}
        <br><br><br><br>
        <label for="login">Введіть логін:</label>
        <input type="text" id="login" placeholder="login@gmail.com" name="login"><br>
        <label for="password">Введіть пароль:</label>
        <input type="text" id="password" placeholder="password" name="password"><br>
        <div class="buttons">
            <input class="button" type="submit" value="Увійти"/>
        </div>
    </form>
@endsection

