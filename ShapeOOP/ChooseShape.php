<?php
require_once('./ShapeStore.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Choose Shapes to draw</title>
</head>

<body>
    <h1> Choose Shapes to draw</h1>
    <form action="ShapeFactory.php" method="post">
        <?php
        foreach ($TypeOfShape as $x => $x_value) { ?>
            <input type="checkbox"  name='id[]' value="<?=$x_value?>">
            <label for="male"><?php echo $x ?></label><br>
        <?php } ?>

        <input type="submit" value="Submit">
    </form>
</body>

</html>