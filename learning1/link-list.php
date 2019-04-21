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
        $countrys = array('Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Bahrain', 'Bangladesh','Barbados','Canada');
        echo '<ul>';
        foreach ($countrys as $key => $value) {
            echo '<li><a href="link-list-pages.php?countrys='.$value.'">'.$value.'</a></li>';
        }
        echo '</ul>';
    ?>
</body>
</html>