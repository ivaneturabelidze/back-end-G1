<head>
    <style>
        div{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        img{
            height: 400px;
        }
    </style>
</head>
<body>
    <div>
        <h1>{{ $quiz->title }}</h1>
        <img src="{{ $quiz->picture }}">
        <h3>ავტორი: {{ $owner->name }}</h3>
        <p>{{ $quiz->description }}</p>
        @if($user)
            <a href="/quiz?quiz_id={{ $quiz->id }}&question_position=1"><button>დაწყება</button></a>
        @else
            <h5>ქვიზის გასავლელად საჭიროა <a href="/login">სისტემაში შესვლა</a></h5>
        @endif
    </div>
</body>