@extends('layouts.main')

@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
    <style>
        *{
            margin: 0;
            padding:0;
        }
        .home{
            display:flex;
            justify-content: center;
            align-items: center;
            width: 98vw;
            height: 98vh;
        }
    </style>
</head>
<body>
    <div class="home">
        <h1>welcome</h1>
    </div>
</body>
</html>
@endsection
