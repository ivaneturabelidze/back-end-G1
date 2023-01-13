<head>
    <style>
        textarea{
            resize: vertical;
            min-height: 50px;
            max-height: 500px;
            width: 200px;
        }
        img{
            height: 80px;
        }
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .input_container{
            display: flex;
            justify-content: space-between;
        }
        .input_container input{
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="/editQuiz">
            @csrf
            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
            <div class="input_container">
                <label for="title">სათაური</label>
                <input type="text" name="title" id="title" value="{{ $quiz->title }}" required>
            </div>
            <br>
            <div class="input_container">
                <label for="description">აღწერა</label>
                <textarea name="description" id="description" required>{{ $quiz->description }}</textarea>
            </div>
            <br>
            <div class="input_container">
                <label for="picture">სურათი</label>
                <input type="text" name="picture" id="picture" value="{{ $quiz->picture }}" required>
            </div>
            <br>
            <hr>
            @foreach($questions as $question)
                <div class="input_container">
                    <label for="question_{{ $question->position }}">კითხვა {{ $question->position }}</label>
                    <input type="text" name="question_{{ $question->position }}" id="question_{{ $question->position }}" value="{{ $question->question }}" required>
                </div>
                <br>
                <div class="input_container">
                    <label for="picture_{{ $question->position }}">სურათი</label>
                    <input type="text" name="picture_{{ $question->position }}" id="picture_{{ $question->position }}" value="{{ $question->picture }}" required>
                </div>
                <br>
                <img src="{{ $question->picture }}">
                <br>
                <br>
                <div class="input_container">
                    <label for="answer_{{ $question->position }}_1">პასუხი 1</label>
                    <input type="text" name="answer_{{ $question->position }}_1" id="answer_{{ $question->position }}_1" value="{{ $question->answer_1 }}" required>
                </div>
                <br>
                <div class="input_container">
                    <label for="answer_{{ $question->position }}_2">პასუხი 2</label>
                    <input type="text" name="answer_{{ $question->position }}_2" id="answer_{{ $question->position }}_2" value="{{ $question->answer_2 }}" required>
                </div>
                <br>
                <div class="input_container">
                    <label for="answer_{{ $question->position }}_3">პასუხი 3</label>
                    <input type="text" name="answer_{{ $question->position }}_3" id="answer_{{ $question->position }}_3" value="{{ $question->answer_3 }}" required>
                </div>
                <br>
                <div class="input_container">
                    <label for="answer_{{ $question->position }}_4">პასუხი 4</label>
                    <input type="text" name="answer_{{ $question->position }}_4" id="answer_{{ $question->position }}_4" value="{{ $question->answer_4 }}" required>
                </div>
                <br>
                <div class="input_container">
                    <label for="correct_answer_{{ $question->position }}">სწორი პასუხი</label>
                    <input type="text" name="correct_answer_{{ $question->position }}" id="correct_answer_{{ $question->position }}" value="{{ $question->correct_answer }}" required>
                </div>
                <br>
                <hr>
            @endforeach
            <div style="display: flex; justify-content: center;">
                <button type="submit">დამატება</button>
            </div>
        </form>
    </div>
</body>