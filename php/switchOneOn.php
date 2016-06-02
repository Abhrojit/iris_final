<?php
    echo "heelloo";
    exec("sudo killall python");
    exec("sudo python /var/www/html/iris/pyscripts/switchOneOn.py 2>&1",$output);
    $response = array('success' => true, 'message' => 'Switch One was successfully switched on!');
    echo json_encode($response);
?>