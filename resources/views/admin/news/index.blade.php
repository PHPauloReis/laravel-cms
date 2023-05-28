@extends("admin.template.layout")
@section("main")

<h1 class="mb-4">Gerenciamento de Notícias</h1>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Notícias cadastradas</h4>
        <a class="btn btn-success" href="{{ route("news.create") }}"><i class="bi bi-plus-lg"></i> Nova</a>
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
            @foreach($news as $item)
            <tr>
                <th class="align-middle" scope="row">{{ $item->id }}</th>
                <td class="align-middle">{{ str()->limit($item->title, 50, '...') }}</td>
                <td class="align-middle">{{ $item->category->title ?? "---" }}</td>
                <td class="align-middle">{{ $item->created_at->format('d/m/Y à\s H\hi') }}</td>
                <td class="align-middle">
                    <form action="{{ route('news.destroy', $item->id) }}" method="post">
                        @csrf
                        @method("delete")
                        <a href="{{ route('news.edit', $item->id) }}" class="btn btn-sm btn-primary">Editar</a>

                        @can('excluir-noticias')
                        <button onclick="if (confirm('Você tem certeza que deseja excluir este registro?')) { this.form.submit() }" type="button" class="btn btn-sm btn-danger">Excluir</button>
                        @endcan

                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <hr>

        <div class="d-flex justify-content-center">
            {{ $news->links() }}
        </div>

    </div>
</div>
@endsection
