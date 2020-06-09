<?php
function makeConnection()
{
    global $aConfigs;
    
    $db = new mysqli(
        $aConfigs['database']['host'],
        $aConfigs['database']['username'],
        $aConfigs['database']['password'],
        $aConfigs['database']['database']
    );
    
    if (!$db) {
        echo "Connection failed:".$db->error;
        die;
    }
    
    return $db;
}
