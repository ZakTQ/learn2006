@extends('base.base')

@section('title', 'Страница регистрации')

@section('content')
    <h1>Страница регистрации</h1>

    <form action="{{ route('reg.reg')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Электронная почта</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Логин</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Пароль</label>
            <input type="password" class="form-control" name="password">
        </div>
        {{-- <div class="mb-3">
            <label class="form-label">Потвердить пароль</label>
            <input type="password" class="form-control" name="password_confirm">
        </div> --}}

        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>

@endsection
