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

        $countrys = array('Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Bahrain', 'Bangladesh','Barbados','Canada');

        foreach ($countrys as $key => $value) {
            $query = "INSERT INTO countries (id, name) VALUES ('', '".$value."')";
            mysqli_query($connect, $query);
        }
        
        mysqli_close($connect);
    ?>    


</body>
</html>