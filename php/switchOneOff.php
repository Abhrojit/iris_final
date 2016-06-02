<?php
    exec("sudo killall python");
    exec("sudo python /var/www/html/iris/pyscripts/switchOneOff.py");
    $response = array('success' => true, 'message' => 'Switch One was successfully switched off!');
    echo json_encode($response);
?>