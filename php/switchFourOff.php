<?php
    exec("sudo killall python");
    exec("sudo python /var/www/html/iris/pyscripts/switchFourOff.py");
    $response = array('success' => true, 'message' => 'Switch Four was successfully switched off!');
    echo json_encode($response);
?>