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

            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Notícias cadastradas</h4>
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data de publicação</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="align-middle" scope="row">2</th>
                            <td class="align-middle">Obesidade é o maior vilão da saúde em 2022</td>
                            <td class="align-middle">Saúde</td>
                            <td class="align-middle">25/03/2023 às 18h33</td>
                            <td class="align-middle">
                                <button type="button" class="btn btn-sm btn-primary">Editar</button>
                                <button type="button" class="btn btn-sm btn-danger">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle" scope="row">1</th>
                            <td class="align-middle">Como descartar adequadamente baterias depois do seu uso</td>
                            <td class="align-middle">Meio ambiente!</td>
                            <td class="align-middle">25/03/2023 às 17h25</td>
                            <td class="align-middle">
                                <button type="button" class="btn btn-sm btn-primary">Editar</button>
                                <button type="button" class="btn btn-sm btn-danger">Excluir</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <hr>

                    <div class="d-flex justify-content-center">

                        <nav>
                            <ul class="pagination mb-0">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>
