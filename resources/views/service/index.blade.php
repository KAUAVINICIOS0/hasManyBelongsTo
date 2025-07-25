<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Services</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Serial Numeber</td>
                <td>Service Type</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->serial_number }}</td>
                    <td>{{ $service->serviceType()->first()->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href='{{ route('welcome') }}'>Voltar</a>
    <a href='{{ route('create-services') }}'>Criar</a>
</body>

</html>
