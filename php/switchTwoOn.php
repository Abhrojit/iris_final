<?php
    exec("sudo killall python");
    exec("sudo python /var/www/html/iris/pyscripts/switchTwoOn.py 2>&1",$output);
    $response = array('success' => true, 'message' => 'Switch Two was successfully switched on!');
    echo json_encode($response);
?>
