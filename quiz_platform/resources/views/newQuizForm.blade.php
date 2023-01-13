<head>
    <style>
        textarea{
            resize: vertical;
            min-height: 50px;
            max-height: 500px;
            width: 200px;
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
            @if(!$questionCount)
                <form action="/newQuiz">
                    <div class="input_container">
                        <label for="question_count">კითხვების რაოდენობა</label>
                        <input type="number" min="1" name="question_count" id="question_count">
                    </div>
                    <br>
                    <div style="display: flex; justify-content: center;">
                        <button>კითხვები</button>
                    </div>
                    <hr>
                </form>
            @else
                <form method="POST" action="/myQuizzes">
                    @csrf
                    <div class="input_container">
                        <label for="title">სათაური</label>
                        <input type="text" name="title" id="title" required>
                    </div>
                    <br>
                    <div class="input_container">
                        <label for="description">აღწერა</label>
                        <textarea name="description" id="description" required></textarea>
                    </div>
                    <br>
                    <div class="input_container">
                        <label for="picture">სურათი</label>
                        <input type="text" name="picture" id="picture" required>
                    </div>
                    <br>
                    <hr>
                    @for($i=1; $i <= $questionCount; $i++)
                        <div class="input_container">
                            <label for="question_{{ $i }}">კითხვა {{ $i }}</label>
                            <input type="text" name="question_{{ $i }}" id="question_{{ $i }}" required>
                        </div>
                        <br>
                        <div class="input_container">
                            <label for="picture_{{ $i }}">სურათი</label>
                            <input type="text" name="picture_{{ $i }}" id="picture_{{ $i }}" required>
                        </div>
                        <br>
                        <div class="input_container">
                            <label for="answer_{{ $i }}_1">პასუხი 1</label>
                            <input type="text" name="answer_{{ $i }}_1" id="answer_{{ $i }}_1" required>
                        </div>
                        <br>
                        <div class="input_container">
                            <label for="answer_{{ $i }}_2">პასუხი 2</label>
                            <input type="text" name="answer_{{ $i }}_2" id="answer_{{ $i }}_2" required>
                        </div>
                        <br>
                        <div class="input_container">
                            <label for="answer_{{ $i }}_3">პასუხი 3</label>
                            <input type="text" name="answer_{{ $i }}_3" id="answer_{{ $i }}_3" required>
                        </div>
                        <br>
                        <div class="input_container">
                            <label for="answer_{{ $i }}_4">პასუხი 4</label>
                            <input type="text" name="answer_{{ $i }}_4" id="answer_{{ $i }}_4" required>
                        </div>
                        <br>
                        <div class="input_container">
                            <label for="correct_answer_{{ $i }}">სწორი პასუხი</label>
                            <input type="text" name="correct_answer_{{ $i }}" id="correct_answer_{{ $i }}" required>
                        </div>
                        <br>
                        <hr>
                    @endfor
                    <input type="hidden" id="question_count" name="question_count" value="{{ $questionCount }}"/>
                    <div style="display: flex; justify-content: center;">
                        <button type="submit">დამატება</button>
                    </div>
                </form>
            @endif
    </div>
</body>