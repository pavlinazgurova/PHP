<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num1" />
		M: <input type="text" name="num2" />
        <input type="submit" />
    </form>
	<?php
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
?>
   <?php if ($num2 >= $num1)
    {
        $product = $num1 * $num2;
        echo "$num1 * $num2 = $product"; ?>
  <?php  }

    else {
        $result = $num1 / $num2;
        echo "$num1 / $num2 = $product";
    }
    ?>}
    ?>
</body>
</html>