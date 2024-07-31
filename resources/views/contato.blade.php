<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="shortcut icon" href="{{ asset('imagens/icon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <title>Contato</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <header class="bg-light sticky-top d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom">
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 fw-bold"><i class="mdi mdi-dog"></i> Lujan's</span>
        </div>
        <ul id="menu" class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link">Início</a></li>
            <li class="nav-item"><a href="/quemsomos" class="nav-link">Quem somos</a></li>
            <li class="nav-item"><a href="/contato" class="nav-link active" aria-current="page">Contato</a></li>
        </ul>
    </header>
    <div class="content container">
        <h1>Contato</h1>
        <form action="/contato" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="motivo_do_contato" class="form-label">Motivo do Contato</label>
                <textarea class="form-control" id="motivo_do_contato" name="motivo_do_contato" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">2024 <i class="mdi mdi-dog"></i> Clínica Veterinária</p>
        <p>Site desenvolvido por Gabriela Lujan</p>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Início</a></li>
            <li class="nav-item"><a href="/quemsomos" class="nav-link px-2 text-muted">Quem somos</a></li>
            <li class="nav-item"><a href="/contato" class="nav-link px-2 text-muted">Contato</a></li>
        </ul>
    </footer>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
