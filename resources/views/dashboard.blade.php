@extends('layouts.app')

@section('content')
    <h1>Личный кабинет</h1>
    <p>Привет, <strong>{{ Auth::user()->name }}</strong>!</p>

    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
        @csrf
        <button type="submit">Выйти</button>
    </form>

    <hr>

    <h2>Сократить новую ссылку</h2>
    <p>Здесь скоро будет форма...</p>
@endsection
