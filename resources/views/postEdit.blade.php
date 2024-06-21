@extends('base.base')

@section('title', 'Редактировать пост')

@section('content')
    <h1>Редактировать пост</h1>

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

    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <input class="form-control" type="text" name="text">
        <input class="btn btn-primary" type="submit" value="Изменить">
    </form>

@endsection
