<x-app-layout>
    <h1>Aqui se mostraran los posts</h1>

    <a href="{{route('posts.create')}}">NUEVO POST</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show',$post)}}">
                    {{$post -> name}}
                </a>
            </li>
        @endforeach
    </ul>

    {{$posts->links()}}
    
</x-app-layout>