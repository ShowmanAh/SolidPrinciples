<?php
/**
 * Created by PhpStorm.
 * User: SHOWMAN
 * Date: 2/8/2020
 * Time: 5:35 PM
 */
namespace Players;
/**
 * Class KepperParent
 * @package Players
 * let A parent class and B child class for A let C use B if we change B  by A in C Class The implementation in "c"
 * should not be change
 *if A return string B should return string in C class
 */

class KepperParent
{
 public function Keeping(){
     return "good keeping";
 }
}