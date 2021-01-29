<?php

class parralelogram extends areaOfShape
{

    function area()
    {
        echo "Area Of parallelogram with length " .  $length =$this->length . " & width " . $width = $this->width. " is "  ;
        return $this->length * $this->width;
    }

}