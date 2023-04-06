<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione_di_partenza</th>
                <th scope="col">Stazione_di_arrivo</th>
                <th scope="col">Orario_di_partenza</th>
                <th scope="col">Orario_di_arrivo</th>
                <th scope="col">Codice_Treno</th>
                <th scope="col">Numero_Carrozze</th>
                <th scope="col">In_orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <th scope="row">{{ $train->id }}</th>
                <td>{{ $train->Azienda }}</td>
                <td>{{ $train->Stazione_di_partenza }}</td>
                <td>{{ $train->Stazione_di_arrivo }}</td>
                <td>{{ $train->Orario_di_partenza }}</td>
                <td>{{ $train->Orario_di_arrivo }}</td>
                <td>{{ $train->Codice_Treno }}</td>
                <td>{{ $train->Numero_Carrozze }}</td>
                <td>{{ $train->In_orario }}</td>
                <td>{{ $train->Cancellato }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>