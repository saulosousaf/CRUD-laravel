<h1>Cadastrar</h1>

<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <label for="name">Nome da Categoria:</label>
    <input type="text" id="name" name="name" required>

    <button type="submit">Salvar</button>
</form>