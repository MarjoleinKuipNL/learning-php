
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $name = 'Marjolein';
        $city = "Amsterdam";
        $movie = "Star wars";
        $friend = "Goerge";
        $candy = "Sour patch vegan";
    ?>

    
</head>
<body>
    <h1>
    <?php
        echo "Hello, $name";
    ?>
    </h1>
    <p>
        I'm so glad you can join us in <?php echo $city; ?> today!
        You will be <b><?php echo $friend; ?>'s guide as you do a range of activities.
    </p>
    <br>
    <p> you will end your day by seeing <i><?php echo  ?></i></p>
</body>
</html>