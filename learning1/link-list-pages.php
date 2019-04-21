<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo htmlspecialchars($_GET["countrys"]);?></title>
</head>
<body>
    <?php
        
        $countrys = array('Afghanistan' => 'afgha', 
                          'Albania'=> 'alban', 
                          'Algeria' => 'alge', 
                          'Andorra'=>'andora',
                          'Bahrain'=>'bahr', 
                          'Bangladesh'=>'bengl', 
                          'Barbados'=>'barb', 
                          'Canada' => 'canada'
                        );
                        
        echo htmlspecialchars($_GET["countrys"]);
    ?>
</body>
</html>