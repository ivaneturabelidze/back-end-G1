<body>
    @foreach($posts as $post)
        <div style="display: flex; align-items: center;">
            <h1>{{$post -> title}}</h1>
            <a href="/admin?delete={{$post->id}}"><button>Delete</button></a>
        </div>
        @foreach($comments as $comment)
            @if($comment -> post_id == $post -> id)
                <h3>{{$comment -> user}}</h3>
                <p>{{$comment -> content}}</p>
            @endif
        @endforeach
    @endforeach
</body>