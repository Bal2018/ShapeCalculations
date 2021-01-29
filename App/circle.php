<?php

class circle extends areaOfShape
{

    function area()
    {
        echo "Area Of circle with radius " . $this->width .   " is "  ;
        return (pi() * pow($this->width,2));
    }


}