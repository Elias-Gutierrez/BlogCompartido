<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>

    @if ($errors->any())
        <div>
            <h2>Errores: </h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.update', $post)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="">
            Titulo: 
            <input type="text" name='name' value="{{old('name', $post->name)}}">
        </label>
        
        <br>
        <br>

        <label for="">
            Slug: 
            <input type="text" name='slug' value="{{old('slug', $post->slug)}}">
        </label>
        
        <br>
        <br>
        
        <label for="">
            Categoria: 
            <input type="text" name='category' value="{{old('category', $post->category)}}">
        </label>
        
        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content">{{old('content', $post->content)}}</textarea>
        </label>
        
        <br>
        <br>

        <button type="submit">Actualizar post</button>
    </form>
</x-app-layout>