<?php

declare(strict_types=1);

namespace App;

include "./inputStuff.php";

require './../vendor/autoload.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A title</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h2 class="font-sofia" >Shape calculations </h2>

<form action="" method="get">
    <label for="shapeEntered">Choose the shape you want a measurement for  </label>

    <select id="shapeEntered" name="shapeEntered">
        <option value="P">Parallelogram</option>
        <option value="S">Rectangle</option>
        <option value="R">Rhombus</option>
        <option value="C">Circle</option>
    </select>

    <label id="length"  for="length_entered"  style="display:none">Enter length of shape
        <input type="number" step="0.1" min="0" id="length_entered" name="length_entered"/>
    </label>

    <label id="width" for="width_entered"  style="display:none" > Enter width of shape
        <input type="number" min="0" step="0.1" id="width_entered" name="width_entered" />
    </label>

    <label id="radius_e" for="radius" style="display:none"> Enter radius of circle
        <input type="number" min="0" step="0.1" id="radius" name="radius_entered" />
    </label>
    <input type="submit" value="submit"  />

</form>

<?php
if (empty($_GET["shapeEntered"]) ==false){
    if ($_GET["shapeEntered"] == "C")  {
        echo entered($_GET["shapeEntered"],$_GET["length_entered"],$_GET["radius_entered"]). PHP_EOL;
    } else {
            echo entered($_GET["shapeEntered"],$_GET["length_entered"],$_GET["width_entered"]). PHP_EOL;
    }
}
?>


<script>
    const ddl = document.getElementById("shapeEntered");
    ddl.onchange=enterWidth;

    function enterWidth()
    {
        const ddl = document.getElementById("shapeEntered");
        const selectedValue = ddl.options[ddl.selectedIndex].value;
        if (selectedValue !== "C")
        {
            document.getElementById("width").style.display="block";
            document.getElementById("length").style.display="block";
            document.getElementById("radius_e").style.display="none";
        }
        else
        {
            document.getElementById("width").style.display = "none";
            document.getElementById("length").style.display = "none";
            document.getElementById("radius_e").style.display = "block";
      }
    }

    enterWidth()
</script>
</body>
</html>
