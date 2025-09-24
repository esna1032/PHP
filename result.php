<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "관심 언어 : ";
    foreach ($_REQUEST["lang"] as $value)
        echo "$value";
    echo "<br>";
    echo "취미  : ";
    foreach ($_REQUEST["hobby"] as $value)
        echo "$value";
    echo "<br>";
    ?>
</body>

</html>