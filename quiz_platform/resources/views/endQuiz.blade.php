<head>
    <style>
        div{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }
        img{
            height: 700px;
        }
    </style>
</head>
<body>
    <div>
        <img src="{{ $quiz->picture }}">
        <h1>მომხმარებელი: {{ $user->name }}</h1>
        <h3>{{ $correct_answers }} სწორი პასუხი</h3>
        <a href="/"><button>მთავარი გვერდი</button></a>
    </div>
</body>