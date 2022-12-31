<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <style>
        div{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        div hr{
            width: 100%;
        }
    </style>
</head>
<body>
    <div>
        @foreach($videoList as $video)
            <h1>{{ $video -> title }}</h1>
            <p>{{ $video -> description }}</p>
            <a href={{ $video -> link }}>{{ $video -> link }}</a>
            <hr>
        @endforeach
    </div>
</body>
</html>