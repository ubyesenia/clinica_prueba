<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


        <title>Ingresos - Clinica</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr><h2 class="text-center">Resultados</h2></tr>  
                    </thead>
                    <tbody class = "table-striped">
                    <tr>
                        <td class="col-4">PACIENTES INGRESADOS EN EL MES ACTUAL</td>
                        <td class="col-4">{{$ingresos1}}</td>
                    </tr>
                    <tr>
                        <td class="col-4">PACIENTES ATENDIDOS EN EL DIA ACTUAL</td>
                        <td class="col-4">{{$ingresos2}}</td>
                    </tr>
                    <tr>
                        <td class="col-4">PACIENTES EN EMERGENCIA</td>
                        <td class="col-4">{{$ingresos3}}</td>
                    </tr>
                    <tr>
                        <td class="col-4">TOTAL DE PACIENTES ATENDIDOS EN EMERGENCIA</td>
                        <td class="col-4">{{$ingresos4}}</td>
                    </tr>
                    </tbody>
                    </table>
                 </div>
            </div>
        </div>
    </body>
</html>