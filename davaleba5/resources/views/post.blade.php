<head></head>
<body>
    <h1>{{$post -> title}}</h1>
    <h2>{{$post -> content}}</h2>
    <h3>Comments:</h3>
    @foreach($comments as $comment)
        <h5>{{$comment -> user}}</h5>
        <p>{{$comment -> content}}</p>
    @endforeach
</body>