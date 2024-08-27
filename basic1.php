<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial1</title>
</head>
<body>
    <div class="container">
        this is my first php web site
        <?php
            echo "<br/>";
            $var1 = 2;
            $var2 =3;
            echo "result is :",$var1+$var2;
            echo "<br/>";
            echo var_dump($var2);
        ?>
    </div>
</body>
</html>