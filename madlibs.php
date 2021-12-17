<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   
    <form action="madlibs.php" method="get">
        <label>Enter a color</label>
        <input type="text" name="color">
        <br>
        <label>Enter a plural noun</label>
        <input type="text" name="pluralNoun">
        <br>
        <label>Enter a celebrity name</label>
        <input type="text" name="celebrity">
        <br>
        <input type="submit">
    </form>
</br>

<?php 

    $color= $_GET["color"];
    $pluralNoun= $_GET["pluralNoun"];
    $celebrity= $_GET["celebrity"];

    echo "Roses are $color <br>";
    echo "$pluralNoun are awesome <br>";
    echo "I love $celebrity <br>";
?>




</body>
</html>