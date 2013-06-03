<?php
    $status_list[400] = '400 Bad Request';
    $status_list[401] = '401 Unauthorized';
    $status_list[403] = '403 Forbidden';
    $status_list[404] = '404 Not Found';
    $status_list[408] = '408 Request Timeout';
    $status_list[500] = '500 Internal Server Error';
    $status_list[502] = '502 Bad Gateway';
    $status_list[503] = '503 Service Unavailable';
    $status_list[504] = '504 Gateway Timeout';
    
    $error = $status_list[$_SERVER['REDIRECT_STATUS']];

    header('HTTP/1.1 ' . $error);

    echo 'You are in ' . __FILE__ . '<br />HTTP STATUS : ' . $error;

    exit;
?>