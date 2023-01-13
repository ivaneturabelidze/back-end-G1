<head>
    <style>
        div{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        img{
            height: 500px;
        }
    </style>
</head>
<body>
    <div>
        <h1>კითხვა {{$question->position}} {{$question_quantity}}-დან</h1>
        <img src="{{ $question->picture }}">
        <h1>{{ $question->question }}</h1>
        <form id="form" method="GET" action="/quiz">
            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
            <input type="hidden" name="question_position" value="{{ $question->position }}">
            <input value="{{ $question->answer_1 }}" type="radio" name="answer" id="1">
            <label for="1">{{ $question->answer_1 }}</label>
            <input value="{{ $question->answer_2 }}" type="radio" name="answer" id="2">
            <label for="2">{{ $question->answer_2 }}</label>
            <input value="{{ $question->answer_3 }}" type="radio" name="answer" id="3">
            <label for="3">{{ $question->answer_3 }}</label>
            <input value="{{ $question->answer_4 }}" type="radio" name="answer" id="4">
            <label for="4">{{ $question->answer_4 }}</label>
            <br>
        </form>

        <div style="display: flex; flex-direction: row; justify-content: space-between; margin-top: 15px;">
            @if(("$question->position" != "1") == true)
                @php
                    $position = $question->position - 1
                @endphp
                <a href="/quiz?quiz_id={{ $question->quiz_id }}&question_position={{ $position }}"><button>წინა კითხვა</button></a>
            @endif
            @if($answer)
                <button>პასუხი</button>
            @else
                <button type="submit" form="form">პასუხი</button>
            @endif
            @if($question_quantity != $question->position)
                @php
                    $position = $question->position + 1
                @endphp
                <a href="/quiz?quiz_id={{ $question->quiz_id }}&question_position={{ $position }}"><button>შემდეგი კითხვა</button></a>
            @else
                <a href="/endQuiz?quiz_id={{ $quiz->id }}"><button>დასრულება</button></a>
            @endif
        </div>
        @if($answer)
            @if($message)
                <h4>{{ $message }}</h4>
            @else
                @if($answer == $question->correct_answer)
                    <h4><span style="color: green">პასუხი სწორია</span></h4>
                @else
                    <h4><span style="color: red">პასუხი არასწორია</span></h4>
                @endif
            @endif
        @endif
    </div>
</body>