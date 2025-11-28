@extends('layouts.app')

@section('content')
    <h1>Вход в систему</h1>

    @if ($errors->any())
        <div class="alert">
            Неверный email или пароль.
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Войти</button>
        </div>
    </form>

    <h2>Тестовые учётные данные</h2>
    <table>
        <thead>
        <tr><th>Email</th><th>Пароль</th></tr>
        </thead>
        <tbody>
        <tr><td>test1@example.com</td><td><code>password</code></td></tr>
        <tr><td>test2@example.com</td><td><code>password</code></td></tr>
        <tr><td>test3@example.com</td><td><code>password</code></td></tr>
        </tbody>
    </table>
@endsection
