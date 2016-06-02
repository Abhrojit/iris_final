<?php
    exec("sudo killall python");
    exec("sudo python /var/www/html/iris/pyscripts/switchThreeOn.py 2>&1",$output);
    $response = array('success' => true, 'message' => 'Switch Three was successfully switched on!');
    echo json_encode($response);
?>