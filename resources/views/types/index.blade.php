<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Service Types</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Description</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($service_types as $service_type)
                <tr>
                    <td>{{$service_type->name}}</td>
                    <td>{{$service_type->description}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('create-service-types')}}">criar tipo de serviço</a>
    <a href='{{route('welcome')}}'>Voltar</a>
</body>

</html>
