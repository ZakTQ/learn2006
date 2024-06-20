@extends('base.base')

@section('title', 'Главная страница')

@section('content')
    <h1>Главная страница</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        <input class="form-control" type="text" name="text">
        <input class="btn btn-primary" type="submit" value="Отправить">
    </form>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>

            <div class="row p-2">
                <input type="submit" class="btn btn-success" value="Прочитать">
                <input type="submit" class="btn btn-warning" value="Изменить">
                <input type="submit" class="btn btn-danger" value="Удалить">
            </div>
        </div>
    </div>

@endsection
