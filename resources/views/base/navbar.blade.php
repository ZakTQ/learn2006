<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('posts.index') }}">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" 
                    href="{{ route('posts.index') }}">Главная страница</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" 
                    href="/home">Личный кабинет</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" 
                    href="{{ route('reg.form') }}">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" 
                    href="/login">Вход</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" 
                    href="/logout">Выход</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
