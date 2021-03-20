<?php

    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=reporte.xls");

?>

<div class="col-md-12">
    <table class="table table-striped table-bordered">
    <tr>
    <th>ID Agente</th>
    <th>Nombre Agente</th>
    <th>Tipo ID Cliente</th>
    <th>ID Cliente</th>
    <th>Nombre Cliente</th>
    <th>Celular</th>
    <th>Tipo Venta</th>
    <th>Referencia</th>
    <th>Valor</th>
    <th>Campana</th>
    <th>Fecha</th>
    </tr>

    <tbody>
    <?php foreach($libros as $libro) { ?>
    <tr>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    <td>Datos OK ok</td>
    </tr>
    <?php } ?>
    </tbody>
    </table>