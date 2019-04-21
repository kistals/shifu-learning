<?php

include "config.php";
        
$query = mysqli_query($connect, 'SELECT * FROM  `countries` WHERE `id`='.htmlspecialchars($_GET["slug"]).' ');

while ( $row_item = mysqli_fetch_assoc($query) ) {
    $id = $row_item['id'];
    $name = $row_item['name'];
    $slug = $row_item['slug'];
    $text = $row_item['text'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редоктировать <?=$name;?>. </title>
</head>
<body>

<?php 
        if(isset($_POST['save'])){

            $query = "UPDATE countries SET name = '{$_POST['name']}', slug = '{$_POST['slug']}', text = '{$_POST['text']}' WHERE id = '$id' ";
            $result = mysqli_query($connect,$query);
            
            echo 'Страна добавлена в базу. <a href="index.php">Вернуться к списку</a>';
        }

        mysqli_close($connect);
        
    ?>

    <form action="" method="POST">
        <input name="name" type="text" value="<?=$name;?>" placeholder="Name"><br>
        <input name="slug" type="text" value="<?=$slug;?>" placeholder="Slug"><br>
        <textarea name="text" placeholder="About Country"><?=$text;?></textarea><br>
        <button type="submit" name="save">Сохранить</button>
    </form>
</body>
</html>