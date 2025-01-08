<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Posts</title>
</head>
<body>

    <a href="{{route('posts.index')}}">Volver a Posts</a>

    <h1>Titulo: {{$post -> name}} </h1>
    <p>
        <b>Categoria: </b> {{$post -> category}}
    </p>
    <p>
        <b>Contenido: </b> {{$post -> content}}
    </p>
    <a href="{{route('posts.edit',$post)}}">Editar post</a>

    <form action="{{route('posts.destroy',$post)}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Eliminar post
        </button>
    </form>
</body>
</html>