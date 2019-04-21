<?php

include "config.php";
        
$query = mysqli_query($connect, 'SELECT * FROM  `countries` WHERE `id`='.htmlspecialchars($_GET["slug"]).' ');

while ( $row_item = mysqli_fetch_assoc($query) ) {
     
    $title = $row_item['name'];
    $text = $row_item['text'];

}

mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title; ?></title>
</head>
<body>

    <?=$text;?>
    
</body>
</html>