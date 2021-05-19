<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    <center>
        <h1> Lista de paises</h1>
    </center>

    <table class="table table-striped">
        <tr>
            <th class="text-light bg-dark">Nombre</th>
            <th class="text-light bg-dark">Capital</th>
            <th class="text-light bg-dark">Moneda</th>
            <th class="text-light bg-dark">Poblacion</th>
        </tr>

        @foreach ( $naciones as $nombre=> $nacion )

        <tr  class="border border-primary".class="rounded-sm">


            <td  class="table-warning">{{$nombre }}</td>
            <td class="table-warning">{{$nacion ["capital"]}}</td>
            <td class="table-danger">{{$nacion ["moneda"]}}</td>
            <td class="table-danger">{{$nacion ["poblacion"]}}</td>
        </tr>

        @endforeach
    </table>

</body>
</html>
