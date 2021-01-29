<?php

class rhombus extends areaOfShape
{

    function area()
    {
        echo "Area Of rhombus with length " . $this->length . " & width " . $this->width . " is "  ;
        return 0.5 * ($this->length * $this->width);
    }


}