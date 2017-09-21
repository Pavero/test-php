<?php
/**
 * Created by PhpStorm.
 * User: Pavero
 * Date: 20.09.2017
 * Time: 8:05
 */
require "autoload.php";

use App\Figures as Figure;

$triangle = new Figure\Triangle('black', array(10, 10, 110, 110, 10, 110));
$triangle->drawPng(200, 200, 'white');