<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $hostname = 'http://localhost/smart_router/server_status.php';
//        $port = 80;
        function GetServerStatus($hostname,$timeout)
        {
            $status = array("ONLINE","OFFLINE");
            $fp = fsockopen($hostname, $errstr = 'Error', $timeout = 2);
            if(!$fp)
            {
                return $status[1];
            }
            else 
            {
                return $status[0];
            }
        }
        echo GetServerStatus('http://localhost/smart_router/server_status.php',80)
        ?>
    </body>
</html>
