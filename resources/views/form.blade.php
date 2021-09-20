<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel form</title>
</head>
<body>
    <h1>Новый клиент</h1>
    {!! Form::open(['url' => 'foo/bar']) !!}
        {{ Form::text('name')}}
    {!! Form::close() !!}
</body>
</html>