<?php
/**
 * Created by PhpStorm.
 * User: Pavero
 * Date: 20.09.2017
 * Time: 7:58
 */

namespace App\Figures;


class Circle extends Shape
{

    protected $x0, $yo, $radius;

    public function __construct(string $color = "white", int $x0 = 0, int $y0 = 0, int $radius = 1)
    {
        $this->x0 = $x0;
        $this->y0 = $y0;
        $this->radius = $radius;

        parent::__construct($color);
        $this->name = __CLASS__;
    }

    public function drawPng(int $xSize, int $ySize, string $background)
    {
        $image = imagecreatetruecolor($xSize, $ySize);
        $backgroundColorRGB = $this->textToColor($background);
        $backgroundColor   = imagecolorallocate($image, $backgroundColorRGB[0], $backgroundColorRGB[1], $backgroundColorRGB[2]);
        $colorRGB = $this->textToColor();
        $color = imagecolorallocate($image, $colorRGB[0], $colorRGB[1], $colorRGB[2]);

        imagefilledrectangle($image, 0, 0, $xSize-1, $ySize-1, $backgroundColor);
        imagefilledellipse($image, $this->x0, $this->y0, $this->radius * 2, $this->radius * 2, $color);

        header('Content-type: image/png');
        imagepng($image);
        imagedestroy($image);
    }
}