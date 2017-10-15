<?php
$server_address = $_SERVER['SERVER_ADDR'];

/*SHOW PC'S IN THE WINDOWS NETWORK*/
function get_networked_pcs(){

    $cmd = shell_exec('NET VIEW');
    $ret = preg_replace('/The command completed successfully./', '', $cmd);
    //$ret = preg_replace('/-/', '', $ret);
    $ret = preg_replace('/[\t]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $ret));

    return '<pre>' . $ret . '<pre>';
}

/*SHOW ALL NETWORKED PC'S*/
function get_networked_pcs_all($interface_address = '192.168.1.10'){
    $cmd = shell_exec('arp -a -n ' . $interface_address);

    $lines = explode("\n", $cmd);
    $exclude = array();
    foreach ($lines as $line) {
        if (strpos($line, '224') !== FALSE || strpos($line, '239') !== FALSE || strpos($line, '255') !== FALSE) {
             continue;
        }
        $exclude[] = $line;
    }
    $cmd = implode("\n", $exclude);

    return '<pre>' . $cmd . '<pre>';
}