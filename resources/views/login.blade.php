@extends('app')

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

    <h4>Тестовые учётные данные</h4>
    <table>
        <thead>
        <tr>
            <th>Email</th>
            <th>Пароль</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>test1@example.com</td>
            <td>password</td>
        </tr>
        <tr>
            <td>test2@example.com</td>
            <td>password</td>
        </tr>
        <tr>
            <td>test3@example.com</td>
            <td>password</td>
        </tr>
        </tbody>
    </table>
@endsection
