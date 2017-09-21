<?php
/**
 * Created by PhpStorm.
 * User: Pavero
 * Date: 20.09.2017
 * Time: 7:41
 */

namespace App\Figures;


class Polygon extends Shape
{
    protected $points = array();

    public function __construct(string $color="white", array $points=array())
    {
        $this->points = $points;
        parent::__construct($color);
        $this->name = __CLASS__;
    }

    public function getPoints() {
        return $this->points;
    }
    public function setPoints(array $points)
    {
        $this->points = $points;
    }

    public function drawPng(int $xSize, int $ySize, string $background)
    {
        $image = imagecreatetruecolor($xSize, $ySize);
        $backgroundColorRGB = $this->textToColor($background);
        $backgroundColor   = imagecolorallocate($image, $backgroundColorRGB[0], $backgroundColorRGB[1], $backgroundColorRGB[2]);
        $colorRGB = $this->textToColor();
        $color = imagecolorallocate($image, $colorRGB[0], $colorRGB[1], $colorRGB[2]);

        imagefilledrectangle($image, 0, 0, $xSize-1, $ySize-1, $backgroundColor);
        $numPoints = sizeof($this->points)/2;
        imagefilledpolygon($image, $this->points, $numPoints, $color);

        header('Content-type: image/png');
        imagepng($image);
        imagedestroy($image);
    }
}