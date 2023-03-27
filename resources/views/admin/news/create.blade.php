@extends("admin.template.layout")
@section("main")
{{--<div class="alert alert-success">--}}
{{--    Registro cadastrado com sucesso!--}}
{{--</div>--}}

{{--<div class="alert alert-danger">--}}
{{--    Não foi possível realizar esta operação:--}}
{{--    <ul class="mt-2 mb-0">--}}
{{--        <li>O campo Título é obrigatório!</li>--}}
{{--        <li>O campo Texto é obrigatório!</li>--}}
{{--    </ul>--}}
{{--</div>--}}

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Cadastrar notícia</h4>
        <a class="btn btn-primary" href="{{ route("news.index") }}"><i class="bi bi-backspace"></i> Voltar</a>
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
@endsection
