<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="create.php">Добавить Страну</a>
    <?php
        include "config.php";

        $query = mysqli_query($connect, 'SELECT * FROM  `countries`');

        echo '<li>';
        while ($country = mysqli_fetch_array($query)) {
            echo "<li><a href=\"view.php?slug=".$country['id']."\">".$country['name']."</a> { <a href=\"edit.php?slug=".$country['id']."\">Edit</a> | <a href=\"delete.php?slug=".$country['id']."\">Delite</a> }</li>";
          }
        echo '</li>';
        
        mysqli_close($connect);
    ?>
    
</body>
</html>