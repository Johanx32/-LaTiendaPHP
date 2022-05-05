<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>
    <h1><center>Paises de la región</center></h1><br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th><center>Nombre</center></th>
                <th><center>Capital</center></th>
                <th><center>Moneda</center></th>
                <th><center>Población</center></th>
                <th><center>Ciudades</center></th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais => $infopais)

                <tr>
                    <td rowspan='{{ count($infopais ["ciudades"]) }}'>
                       <b class="text-primary"><center>{{ $pais }}</center></b> 
                    </td>

                    <td rowspan='{{ count($infopais ["ciudades"]) }}'>
                       <b class="text-success"><center>{{ $infopais["capital"] }}</center></b>
                    </td>

                    <td rowspan='{{ count($infopais ["ciudades"]) }}'>
                       <b class="text-danger"><center>{{ $infopais["moneda"] }}</center></b>
                    </td>

                    <td rowspan='{{ count($infopais ["ciudades"]) }}'>
                       <b class="text-warning"><center>{{ $infopais["población"] }}</center></b>
                    </td>

                    @foreach($infopais["ciudades"] as $ciudad)

                        <th>
                           <b class="text-info"><center>{{ $ciudad }}</center></b> 
                        </th>
                    </tr>
                    @endforeach
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>