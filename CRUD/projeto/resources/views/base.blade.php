<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Pegando as variáveis de ambiente --}}
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Controle de Estoque</h1>
        </header>
        <nav>
            <ul>
                {{-- Links para o cadastro --}}
                <li><a href="/joias">Início</a></li>
                <li><a href="/joias/create">Cadastro de Joias</a></li>
            </ul>
        </nav>
        <div class="content">
            {{-- o conteúdo da view específica será injetado aqui! --}}
            @yield('content')
        </div>
        <footer>
            <div>
                <p>Instagram da loja</p>
                <p><a href="https://www.instagram.com/lanixbr/" target="_blank">lanixbr</a></p>
            </div>
            <div>
                <p>Larissa Foresti Castoldi</p>
            </div>
        </footer>
    </div>
</body>
</html>