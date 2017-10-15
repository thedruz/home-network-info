<?php

/*PING THE NETWORKS BROADCAST ADDRESS*/
$broadcast_address = '192.168.1.255';

$cmd = shell_exec('ping 192.168.1.255');
//Return to index
header('Location:index.php');