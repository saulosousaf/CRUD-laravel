<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste crud em laravel</title>
</head>
<body>
    <h1>Listagem de Categorias</h1>
    <a href="{{ route('category.create') }}">Criar nova categoria</a>
    <ul>
        @foreach($categories as $category)
            <li>
                {{ $category->name }} 
                <a href="{{ route('category.edit', $category->id) }}">Editar</a>
                <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>