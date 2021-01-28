<?php

class rectangle extends areaOfShape
{
    function area()
    {

        $areaResult = $this->length * $this->width;
        echo "Area Of Rectangle with length " .$this->length. " & width " . $this->width. " is "  ;
        return $areaResult;
    }


}