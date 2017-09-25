<?php
    include_once "../classes/Cuppa.php";
    $cuppa = Cuppa::getInstance();
    $api_check = $cuppa->security->api();
    if(@$api_check->error){ echo json_encode($api_check, JSON_PRETTY_PRINT); exit(); }
    // Code here
    
?>