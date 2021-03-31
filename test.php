<!DOCTYPE html>
<?php require_once 'func.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php 
        $db=new Database('case');
        $result = $db->runQuery("SELECT * FROM tblmem LIMIT 1");
        $rad=mysqli_fetch_assoc($result);

        echo $rad['namn']."<br>";
        echo $db->dec($rad['namn'])."<br>";
        $namn="Charlie Jarl";
        echo "$namn<br>";
        $enamn=$db->enc($namn);
        echo $enamn."<br>";
        echo $db->dec($enamn);



    ?>
</body>
</html>