<?php
$router->get('/', function () use ($router){



   /* $fechaactual = getdate();
    print_r($fechaactual);
    echo "Hoy es: $fechaactual[weekday], $fechaactual[mday] de $fechaactual[month] de $fechaactual[year]";
    $a = array( $fechaactual);
    return json_encode($a);   */
    
    $a= array('a' => "1");
    return json_encode($a);

    
});
