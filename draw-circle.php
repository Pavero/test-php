<?php
/**
 * Created by PhpStorm.
 * User: Pavero
 * Date: 20.09.2017
 * Time: 8:05
 */
require "autoload.php";

use App\Figures as Figure;

$rectangle = new Figure\Circle('green', 60, 60, 50);
$rectangle->drawPng(200, 200, 'white');