<?php

class parralelogram extends areaOfShape
{

    function area()
    {
        $length =$this->length;
        $width = $this->width;
        $arearesult = $length * $width;
        echo "Area Of parralelogram with length " . $length . " & width " . $width . " is "  ;
        return $arearesult;
    }



}