<?php

$Negara = [
    'Indonesia' => 'D.K.I. Jakarta',
    'Singapura'  =>  'Singapura',
    'Malaysia' => 'Kuala Lumpur',
    'Brunei' => 'BandarSeri Begawan',
    'Thailand' => 'Bangkok',
    'Laos' => 'Vientiane',
    'Filipina' => 'Manila',
    'Myanmar' => 'Naypyidaw'
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>daftar negara ASEAN dan Ibukota </title>
</head>

<body>
    <h1>daftar negara ASEAN dan ibukota :</h1>

    <?php
    foreach ($Negara as $k => $v) {
        echo "<br>$k  :  $v";
    }
    ?>
</body>

</html>