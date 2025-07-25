<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Service</title>
</head>

<body>
    <form method='POST'action='/create-services-action'>
        @csrf
        <input name='name' type="text" placeholder="Nome">
        <input name='serial_number' type="text" placeholder="Número de serie">

        <select name="id_service_type">
            @foreach ($service_types as $service_type)
                <option value="{{ $service_type->id }}">{{ $service_type->name }}</option>
            @endforeach
        </select>

        <input type='submit' value='send' />
    </form>

    <a  href='{{route('services')}}'>voltar</a>
</body>

</html>
