@extends('base.base')

@section('title', 'Информация о посте')

@section('content')
    <h1>Информация о посте</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <p class="card-text">{{ $post->id }}</p>
            <p class="card-text">{{ $post->text }}</p>

            {{-- <div class="row p-2">
                <a href="{{ route('posts.show', ['post' => $item->id]) }}" type="submit"
                    class="btn btn-success">Прочитать</a>
                <input type="submit" class="btn btn-warning" value="Изменить">
                <input type="submit" class="btn btn-danger" value="Удалить">
            </div> --}}
        </div>
    </div>

@endsection
