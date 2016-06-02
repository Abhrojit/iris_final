<?php
    exec("sudo killall python");
    exec("sudo python /var/www/html/iris/pyscripts/switchThreeOff.py");
    $response = array('success' => true, 'message' => 'Switch Three was successfully switched off!');
    echo json_encode($response);
?>