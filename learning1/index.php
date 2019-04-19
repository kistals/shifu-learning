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
        $countrys = array('Afghanistan', 'Albania', 'Algeria', 'AndorraBahrain', 'Bangladesh', 'Barbados', '
        Belarus', 'Cabo', 'Verde', 'Cambodia', 'Cameroon', 'Canada');

        echo '<ul>';
        foreach ($countrys as $key => $value) {
            echo '<li>'.$value.'</li>';
        }
        echo '</ul>';
    ?>
</body>
</html>