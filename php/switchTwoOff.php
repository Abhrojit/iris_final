<?php
    exec("sudo killall python");
    exec("sudo python /var/www/html/iris/pyscripts/switchTwoOff.py");
    $response = array('success' => true, 'message' => 'Switch Two was successfully switched off!');
    echo json_encode($response);
?>