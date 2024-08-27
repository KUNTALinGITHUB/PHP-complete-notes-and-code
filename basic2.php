<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial2</title>
</head>
<body>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing :border-box;
        }
    .container
    {
        max-width:80% ;
        background-color: green;
        margin: auto;
    }
    </style>
    <div class="container">
        <h4> know about conditional statements</h4>
        <br/>
    <?php

    // conditional statement
    $age=24;
    if($age>18){
        echo "you can drive the car";
    }
    else if($age==18)
    {
        echo "you also can drive the car";
    }
    else{
        echo "you can not drive a car";
    }

    echo"<br/>";

    //print all the value from this array by using loop
    $language=array("python","c++","c#","php","java");
    echo "the size of array is :",count($language);

    $i=0;
    while($i<count($language))
    {
        echo"<br/>";
        echo $i+1,"index value of language array is :",$language[$i];
        $i++;
    }
    ?>
    </div>
</body>
</html>