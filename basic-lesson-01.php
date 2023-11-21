<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Review-Practice</title>
</head>

<body>
    <h3>給定兩個變數，思考如何交換兩個變數的值</h3>
    <p>a=10，b=50，b;讓兩個值交換:</p>
    <pre>
    $a=10;
    $b=50;
    $tmp=$a;
    $a=$b;
    $b=$tmp;
    </pre>
    <?php
    $a=10;
    $b=50;
    $tmp=$a;
    $a=$b;
    $b=$tmp;

    echo '$a='.$a."&nbsp&nbsp&nbsp";
    echo '$b='.$b;
    ?>
</body>

</html>