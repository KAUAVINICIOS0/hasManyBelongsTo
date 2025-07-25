<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Create Service Types</title>
</head>
<body>
    <form method='POST' action='/create-service-types-action'>
        @csrf
        <input name='name' type='text' placeholder='hardware' required>
        <input name='description' type='text' placeholder='bla bla bla' required>
        <input type='submit' value='send'>
    </form>

    <a href='{{route('service-types')}}'>voltar</a>
</body>
</html>