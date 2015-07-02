<?php
/**
 * Solve this puzzle by writing the shortest code.
 * Whitespaces (spaces, new lines, tabs...) are counted in the total amount of chars.
 * These comments should be burnt after reading!
 **/

fscanf(STDIN, "%d %d %d %d",
    $LX, // the X position of the light of power
    $LY, // the Y position of the light of power
    $TX, // Thor's starting X position
    $TY // Thor's starting Y position
);

$thorX = $TX;
$thorY = $TY;
$lightX = $LX;
$lightY = $LY;
// game loop
while (TRUE)
{
    fscanf(STDIN, "%d",
        $E // The level of Thor's remaining energy, representing the number of moves he can still make.
    );
    $directionY = "";
    $directionX = "";
    
    if($thorY > $lightY){
        $directionY = "N";
        $thorY--;
    }else if($thorY < $lightY){
        $directionY = "S";
        $thorY++;
    }
    
    if($thorX > $lightX){
        $directionX = "W";
        $thorX--;
    }else if($thorX < $lightX){
        $directionX = "E";
        $thorX++;
    }

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    echo($directionY."".$directionX."\n"); // A single line providing the move to be made: N NE E SE S SW W or NW
}
?>
