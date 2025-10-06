<h1>Editar Categoria</h1>

<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nome da Categoria:</label>
    <input type="text" id="name" name="name" value="{{ $category->name }}" required>

    <button type="submit">Atualizar</button>
</form>
