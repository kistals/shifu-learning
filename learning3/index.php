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

        $query = mysqli_query($connect, 'SELECT * FROM  `countries`');

        echo '<li>';
        while ($country = mysqli_fetch_array($query)) {
            echo "<li><a href=\"country.php?slug=".$country['id']."\">".$country['name']."</a></li>";
          }
        echo '</li>';
        
        mysqli_close($connect);
    ?>
    
</body>
</html>