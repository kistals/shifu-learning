<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php 
        include "config.php";

        if(isset($_POST['save'])){

            $query = "INSERT INTO `countries` (name, slug, text) VALUES ('".$_POST["name"]."','".$_POST["slug"]."','".$_POST["text"]."')";
            $result = mysqli_query($connect,$query);
        }

           
    ?>

    <form action="" method="POST">
        <input name="name" type="text" placeholder="Name"><br>
        <input name="slug" type="text" placeholder="Slug"><br>
        <textarea name="text" placeholder="About Country"></textarea><br>
        <button type="submit" name="save">Сохранить</button>
    </form>
    
</body>
</html>