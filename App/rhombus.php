<?php

class rhombus extends areaOfShape
{

    function area()
    {
        $length =$this->length;
        $width = $this->width;
        $arearesult = 0.5 * ($length * $width);
        echo "Area Of rhombus with length " . $length . " & width " . $width . " is "  ;
        return $arearesult;
    }


}