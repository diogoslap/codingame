<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$fire = true;
// game loop
while (TRUE)
{
    $highMountain = 0;
    $posHigh = 0;
    fscanf(STDIN, "%d %d",
        $spaceX,
        $spaceY
    );
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $mountainH // represents the height of one mountain, from 9 to 0. Mountain heights are provided from left to right.
        );
        if($mountainH > $highMountain){
            $highMountain = $mountainH;
            $posHigh = $i;
        }
    }
    
    if($spaceX == $posHigh){
        echo("FIRE\n");
    }else{
        echo("HOLD\n");
    }
  

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    //echo("HOLD\n"); // either:  FIRE (ship is firing its phase cannons) or HOLD (ship is not firing).
}
?>
