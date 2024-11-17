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
        <table class="table">
            <thead>
                <tr ><h2>Resultados</h2></tr>  
            </thead>
            <tbody class = "table-striped">
              <tr>
                <td>PACIENTES INGRESADOS EN EL MES ACTUAL</td>
                <td>VALOR</td>
              </tr>
              <tr>
                <td>PACIENTES ATENDIDOS EN EL DIA ACTUAL</td>
                <td>VALOR</td>
              </tr>
              <tr>
                <td>PACIENTES EN EMERGENCIA</td>
                <td>VALOR</td>
              </tr>
              <tr>
                <td>TOTAL DE PACIENTES ATENDIDOS EN EMERGENCIA</td>
                <td>VALOR</td>
              </tr>
            </tbody>
          </table>
    </body>
</html>