<?php

class areaOfShape
{
    protected $length;
    protected $width;

    function __construct( $length, $width ) {
        $this->length = $length;
        $this->width = $width;
    }

    function area()
    {

    }

    function perimeter()
    {
        $length=$this->length;
        $width =$this->width;
    }

}