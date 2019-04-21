<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Запись удалена</title>
</head>
<body>
<?php
    include "config.php";
            
    $query = mysqli_query($connect, 'DELETE FROM  countries WHERE `id`='.htmlspecialchars($_GET["slug"]).' ');
    
    if($query){
        
        echo 'Запись удалена успешно. <a href="index.php">Вернуться к списку</a>';
    }else{
        
        echo "Ошибка удаления: " . $connect->error;
    }
    mysqli_close($connect);
?>

</body>
</html>