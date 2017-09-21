<?php
/**
 * Created by PhpStorm.
 * User: Pavero
 * Date: 20.09.2017
 * Time: 7:41
 */

namespace App\Figures;


class Rectangle extends Polygon
{
    public function __construct(string $color = "white", int $x0 = 0, int $y0 = 0, int $xSize = 100, int $ySize = 100)
    {
        $points = array (
            $x0, $y0,
            $x0 + $xSize, $y0,
            $x0 + $xSize, $y0 + $ySize,
            $x0, $y0 + $ySize
        );
        parent::__construct($color, $points);
        $this->name = __CLASS__;
    }
}