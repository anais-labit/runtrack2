<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$boolean=true;
$int=10;
$float=13.1;
$str="Hello";
$null=" ";
?>

<table>
    <tr>
        <th>type</th>
        <th>nom</th>
        <th>valeur</th>
    </tr>

    <tbody>
        <tr><td>boolean</td> <td>boolean</td> <td> <?php echo $boolean ?> </td></tr>
        <tr><td>integer</td> <td>int</td> <td> <?php echo $int ?> </td></tr>
        <tr><td>float</td> <td>float</td> <td> <?php echo $float ?> </td></tr>
        <tr><td>str</td> <td>string</td> <td> <?php echo $str ?> </td></tr>
        <tr><td>null</td> <td>null</td> <td> <?php echo $null ?> </td></tr>

    </tbody>
    </table>
    
    
</body>
</html>