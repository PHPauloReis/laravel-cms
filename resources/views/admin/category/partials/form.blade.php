<div class="mb-3">
    <label for="title" class="form-label"><strong>Título da categoria</strong></label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Ex.: Política" value="{{ $category->title ?? old('title') }}">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-success" id="submit_form">Registrar categoria</button>
</div>
