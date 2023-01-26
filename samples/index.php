<?php

$allowed_ips = array("172.16.0.2" => true, "172.16.0.66" => true);

if(isset($_GET["PG"]))
{
    $CONN_IP = $_GET["PG"];

    if(isset($allowed_ips[$CONN_IP]) && $allowed_ips[$CONN_IP] == true)
    {
        echo("AllOW\n");
        die();    
    }

    echo("Access Denied!\n");
    die();    
}

