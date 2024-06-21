@extends('base.base')

@section('title', 'Главная страница')

@section('content')
    <h1>Главная страница</h1>

    <div class="row">
        @isset($posts)
            @foreach ($posts as $item)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">{{ $item->id }}</p>
                        <p class="card-text">{{ $item->text }}</p>

                        <div class="row p-2">
                            <div>
                                <a class="btn btn-success" href="{{ route('posts.show', ['post' => $item->id]) }}">Прочитать</a>
                            </div>
                            <div>
                                <a class="btn btn-warning" href="{{ route('posts.edit', ['post' => $item->id]) }}">Изменить</a>
                            </div>
                            <form action="{{ route('posts.destroy', ['post' => $item->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input style="display: inline-block" type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <input class="form-control" type="text" name="text">
        <input class="btn btn-primary" type="submit" value="Отправить">
    </form>


@endsection
