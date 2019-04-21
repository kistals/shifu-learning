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

        while ($result = mysqli_fetch_array($query)) {
            echo $result['name']."<br>";
          }
        
        mysqli_close($connect);
    ?>
    
</body>
</html>