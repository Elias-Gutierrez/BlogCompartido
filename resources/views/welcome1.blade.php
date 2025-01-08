<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            margin: 0;
            padding: 20px;
        }
        .card {
            background-color: #444;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .card h3 {
            margin: 0 0 10px;
        }
    </style>
</head>
<body>
    <h1>Consumo de APIs en Laravel</h1>

    {{-- Usuarios --}}
    <div class="card">
        <h3>Usuarios</h3>
        <ul>
            @foreach ($usuarios as $usuario)
                <li>{{ $usuario['name'] }} - {{ $usuario['email'] }}</li>
            @endforeach
        </ul>
    </div>

    {{-- Imagen de Perro --}}
    <div class="card">
        <h3>Imagen Aleatoria de Perro</h3>
        <img src="{{ $perro['message'] }}" alt="Perro" style="width: 100%; border-radius: 8px;">
    </div>

    {{-- Datos de Gatos --}}
    <div class="card">
        <h3>Dato Curioso sobre Gatos</h3>
        <p>{{ $gatos['fact'] }}</p>
    </div>

    {{-- Precio de Bitcoin --}}
    <div class="card">
        <h3>Precio de Bitcoin</h3>
        <p>USD: ${{ $bitcoin['bpi']['USD']['rate'] }}</p>
        <p>EUR: €{{ $bitcoin['bpi']['EUR']['rate'] }}</p>
        <p>GBP: £{{ $bitcoin['bpi']['GBP']['rate'] }}</p>
    </div>
</body>
</html>
