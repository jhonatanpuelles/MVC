<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <td>
    <caption>Lista de Ciudades</caption>
        <tr>
            <th>Id</th>
            <th>Ciudad</th>
            <th>Codigo_pais</th>
            <th>Ultima actualizacion</th>            
        </tr>
<?php
    foreach ($cityList as $key => $item) {
?>
    <tr>
        <td>
<?php
        echo $item['city_id'];
?>
        </td>
        <td>
<?php
        echo $item['city'];
?>
        </td>
        <td>
<?php
        echo $item['country_city'];
?>
        </td>
        <td>
<?php
        echo $item['last_update'];
?>
        </td>
        
        </tr>
<?php
    }
?>    
    </table>
</body>
</html>