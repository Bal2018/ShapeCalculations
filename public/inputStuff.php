<?php
function entered( $shapeEntered,$length_entered, $width_entered )
{
//    echo "Length entered  =".$length_entered. "<br>";

    if ($length_entered == "" && $shapeEntered !== 'C') {
        return("ERROR : length entered empty !!" );
    }

    if ($width_entered == "") {
        return("ERROR : width entered empty !!");
    }
    switch ( $shapeEntered) {
        case 'S':
            $shape = new rectangle($length_entered, $width_entered);
            break;
        case 'C':
            $shape = new circle($length_entered, $width_entered);
            break;
        case 'R':
            $shape = new rhombus($length_entered, $width_entered);
            break;
        case 'P':
            $shape = new parralelogram($length_entered, $width_entered);
            break;
        default:
            return "ERROR: How did you get here ?  Looks like something went wrong !";
    }
    return $shape->area();
}