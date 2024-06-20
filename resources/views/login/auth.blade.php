@extends('base.base')

@section('title', 'Страница входа')

@section('content')
    <h1>Страница входа</h1>

    <form>
        {{-- <div class="mb-3">
            <label class="form-label">Электронная почта</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
        </div> --}}
        <div class="mb-3">
            <label class="form-label">Логин</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="mb-3">
            <label class="form-label">Пароль</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
@endsection
