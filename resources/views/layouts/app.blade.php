<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Meta Tags para SEO -->
    <meta name="description" content="@yield('meta_description', 'Aplicativo Laravel para exibição de dados aleatórios de usuários.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Laravel, API, Usuários, Random Data')">
    <meta name="author" content="Luiz Santos">

    <!-- Meta Tags para Redes Sociais -->
    <meta property="og:title" content="@yield('meta_og_title', 'Random Data App')">
    <meta property="og:description" content="@yield('meta_og_description', 'Veja informações de usuários gerados aleatoriamente usando Laravel.')">
    <meta property="og:image" content="@yield('meta_og_image', asset('images/default-social.png'))">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Título da Página -->
    <title>@yield('title', 'Random Data App')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (opcional para ícones) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('users.index') }}">Random Data App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.fetch') }}">Buscar Novos Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <x-footer />

    <!-- Bootstrap 5 JS Bundle (inclui Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>