<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d %d %d",
    $N, // the total number of nodes in the level, including the gateways
    $L, // the number of links
    $E // the number of exit gateways
);
for ($i = 0; $i < $L; $i++)
{
    fscanf(STDIN, "%d %d",
        $N1, // N1 and N2 defines a link between these nodes
        $N2
    );
    $links[] = array($N1,$N2);
}
for ($i = 0; $i < $E; $i++)
{
    fscanf(STDIN, "%d",
        $EI // the index of a gateway node
    );
    $gateways[] = $EI;
}
$myPosition = NULL;
// game loop
while (TRUE)
{
    $moved = false;
    fscanf(STDIN, "%d",
        $SI // The index of the node on which the Skynet agent is positioned this turn
    );
    $nodeMovementEnemy= array();
    $nodeMovementVirus= array();
    forEach($links  as $link){
        forEach($link as $nodeEnemy){
            if($nodeEnemy != $SI && in_array($SI,$link)){
                $nodeMovementEnemy[] = $nodeEnemy;
            }
        }
        
        foreach($gateways as $gateway){
            $myPosition = $gateway;
            
            foreach($nodeMovementEnemy  as $movementEnemy){
                if($movementEnemy == $gateway){
                    echo($gateway." ".$SI."\n");
                    $moved= true;
                    break;
                }
            }
            if($moved){
                break;
            }
        }
         if($moved){
            break;
        }
        
    }
    if(!$moved){
        foreach($nodeMovementEnemy as $movement){
            echo($movement." ".$SI."\n");
            break;
        }
    }
  
       // foreach($gateways as $gateway){
        //    foreach($link as $node){
        //        if($node != $gateway && in_array($gateway,$link)){
        //            $nodeMovementVirus[] = $node;
        //        }
        //        if($node == $SI ){
                            
        //        }
        //    }
        //    echo ($gateway." ".$SI."\n");
        //}
    
    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
   
    
    //echo("2 1\n"); // Example: 0 1 are the indices of the nodes you wish to sever the link between
}
?>
