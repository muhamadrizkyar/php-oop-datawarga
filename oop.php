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
    include('mylib/warga.lib.php');
    $warga1= new warga();
    $warga1->personawal();
    echo "<hr>";
    //menggunakan set person untuk menampilkan data karena person tidak ada menyimpan data
    $warga1->setperson();
    $warga1->person();
    echo "<hr>";
    //Contoh Mengisi dari parameter
    $warga1->person3('kholid','Depok');
?>
</body>
</html>