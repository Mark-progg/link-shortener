@extends('app')

@section('content')
    <h1>Личный кабинет</h1>
    <p>Привет, <strong>{{ Auth::user()->name }}</strong>!</p>

    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
        @csrf
        <button type="submit">Выйти</button>
    </form>

    <hr>

    <h2>Сократить новую ссылку</h2>
    <form method="POST" action="{{ route('links.store') }}">
        @csrf
        <div class="form-group">
            <label for="full_url">Полная ссылка</label>
            <input type="url" name="full_url" id="full_url" required>
        </div>
        <button type="submit">Сократить</button>
    </form>

    @if (session('success'))
        <div class="alert" style="margin-top: 1rem;">
            {{ session('success') }}
        </div>
    @endif

    <h2>Мои ссылки</h2>
    @if ($links->count())
        <table>
            <thead>
            <tr>
                <th>Полная ссылка</th>
                <th>Короткая</th>
                <th>Кликов</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($links as $link)
                <tr>
                    <td><a href="{{ $link->full_url }}" target="_blank">{{ Str::limit($link->full_url, 40) }}</a></td>
                    <td><a href="{{ url($link->short_code) }}" target="_blank">{{ url($link->short_code) }}</a></td>
                    <td>{{ $link->click_count }}</td>
                    <td>
                        <form method="POST" action="{{ route('links.destroy', $link) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Удалить?')">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>У вас пока нет сокращённых ссылок.</p>
    @endif
@endsection
