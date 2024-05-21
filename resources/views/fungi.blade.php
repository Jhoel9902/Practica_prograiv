<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Hongos</title>
</head>
<body>
    <h1>Listado de Hongos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Pileo</th>
                <th>Lamela</th>
                <th>Forma del Pie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fungi as $fungus)
            <tr>
                <td>{{ $fungus->Nombre }}</td>
                <td>{{ $fungus->Descripcion }}</td>
                <td>{{ $fungus->Pileo }}</td>
                <td>{{ $fungus->Lamela }}</td>
                <td>{{ $fungus->{'Forma del Pie'} }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
