<head>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            img{
                height: 300px;
            }

            .button{
                width: 180px;
                height: 100px;
            }
        </style>
</head>
<body>
    @if(session('message'))
        <div style="display: flex; justify-content: center;">
            <h1><span style="color: green;">{{ session('message') }}</span></h1>
        </div>
    @endif
    <a href="/"><button class="button">მთავარი გვერდი</button></a>
    <a href="/newQuiz"><button class="button">ქვიზის დამატება</button></a>
    @foreach($quizzes as $quiz)
        <figure>
            <a href="/quizMain?quiz_id={{ $quiz->id }}"><h1>{{ $quiz -> title }}</h1></a>
            <img src="{{ $quiz -> picture }}">
            @php
                $question_count = 0
            @endphp
            @foreach($questions as $question)
                @if("{{ $question->quiz_id }}" == "{{ $quiz->id }}")
                    @php
                        $question_count++
                    @endphp
                @endif
            @endforeach
            <h3>{{ $question_count }} კითხვა</h3>
            <a href="/editQuiz?quiz_id={{ $quiz->id }}">შეცვლა</a>
            <a href="/deleteQuiz?quiz_id={{ $quiz->id }}">წაშლა</a>
        </figure>
    @endforeach
</body>