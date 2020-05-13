<?php
        $remote = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
        $remote->exec("set names utf8");
        $remote->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
        $remote->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>
