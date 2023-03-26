<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CMS (Beta) - Notícias Cadastradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <nav class="navbar navbar-expand-lg bg-primary mb-5" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">Laravel CMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notícias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Comentários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1 class="mb-4">Gerenciamento de Notícias</h1>

            <div class="alert alert-success">
                Registro cadastrado com sucesso!
            </div>

            <div class="alert alert-danger">
                Não foi possível realizar esta operação:
                <ul class="mt-2 mb-0">
                    <li>O campo Título é obrigatório!</li>
                    <li>O campo Texto é obrigatório!</li>
                </ul>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Cadastrar notícia</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="category_id" class="form-label"><strong>Título da notícia</strong></label>
                                <select type="text" class="form-select" id="category_id" name="category_id">
                                    <option value="">--- Selecione ---</option>
                                    <option value="1">Policial</option>
                                    <option value="2">Política</option>
                                    <option value="3">Entretenimento</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label"><strong>Título da notícia</strong></label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Ex.: Jogador de futebol ganha na loteria">
                            </div>
                            <div class="mb-3">
                                <label for="subtitle" class="form-label"><strong>Resumo da notícia</strong></label>
                                <textarea class="form-control" id="subtitle" name="subtitle"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label"><strong>Texto da notícia</strong></label>
                                <textarea class="form-control" id="text" name="text" rows="8"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success" id="submit_form">Registrar notícia</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>
