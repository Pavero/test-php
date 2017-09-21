<?php
/**
 * Created by PhpStorm.
 * User: Pavero
 * Date: 20.09.2017
 * Time: 7:21
 */

require "autoload.php";

use App\Figures as Figure;

echo "Lets create a triangle and call drawJpg()";
echo "<br/>";

$triangle = new Figure\Triangle();
$triangle->drawJpg();

echo "<br/><br/>";
echo "Now lets create circle and call drawTxt()";
echo "<br/>";

$circle = new Figure\Circle();
$circle->drawTxt();

echo "<br/><br/>";
echo "Pff. At least lets see some pngs";
echo "<br/>";
?>

<style>
    img {
        padding: 10px 20px;
    }
</style>

<img src="draw-rectangle.php" />
<img src="draw-circle.php" />
<img src="draw-triangle.php" />

