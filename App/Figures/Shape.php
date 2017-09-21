<?php
/**
 * Created by PhpStorm.
 * User: Pavero
 * Date: 20.09.2017
 * Time: 7:23
 */

namespace App\Figures;


abstract class Shape
{
    protected $color;
    protected $name;

    public function __construct(string $color = "white")
    {
        $this->color = $color;
        $this->name = __CLASS__;
    }

    function __autoload($className) {
        $file = $className . '.php';
        if(file_exists($file)) {
            require_once $file;
        }
    }

    public function getColor() {
        return $this->color;
    }
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    abstract public function drawPng(int $xSize, int $ySize, string $background);

    public function drawJpg()
    {
        echo "Not implemented";
    }

    public function drawTxt()
    {
        echo 'Hello, I\'m a ' . $this->name;
    }

    protected function textToColor($color=null)
    {
        $color = $color ?? $this->color;
        $colorRGB=array();
        switch ($color) {
            case "white":
                $colorRGB = array(255, 255, 255);
                break;
            case "black":
                $colorRGB = array(0, 0, 0);
                break;
            case "red":
                $colorRGB = array(255, 0, 0);
                break;
            case "green":
                $colorRGB = array(0, 255, 0);
                break;
            case "blue":
                $colorRGB = array(0, 0, 255);
                break;
            default:
                $colorRGB = array(255, 255, 255);
        }
        return $colorRGB;
    }

}


