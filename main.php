<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Trening </title>
        <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>

    <div class="about me">
        <h1> <?php echo $p ?> </h1>

        <div class="data">
            <?php include 'image.php' ?> 

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $name, " ", $surname . "<br>";
                        echo "Город - ", " ", $city; 
                    ?>
                </p>

                <p>Мне 
                    <?php echo $age;  ?>
                    лет </p>
                    <p> В данном блоке я изучила основы веб-программирования </p>
                    <p> Познакомилась с веб-серверom XAMPP </p>
            </div>
        </div>

        <div class="article">
            <p class="Text">
            </p>
        </div>

        <?php include "footer.inc.php" ?>
    </div>
</div>

</body>
</html>

