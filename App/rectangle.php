<?php

class rectangle extends areaOfShape
{
    function area()
    {

        echo "Area Of Rectangle with length " .$this->length. " & width " . $this->width. " is "  ;
        return ($this->length * $this->width);
    }


}