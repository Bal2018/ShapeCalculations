<?php

class circle extends areaOfShape
{

    function area()
    {
 //       $width =$this->width;
//        echo "len> $length <";
        $areaResult = pi() * pow($this->width,2);
        echo "Area Of circle with radius " . $this->width .   " is "  ;
        return $areaResult;
    }


}