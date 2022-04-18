<?php
require_once 'dbtools.inc.php';
function register_user($userid, $userpw){
    $userpw = md5($userpw);
    $result = false;
    $sql = "INSERT INTO `user` (`user_ID`, `user_PW`)
            VALUE ('{$userid}', '{$userpw}')";

    $link = create_connection();

    $query = execute_sql($link,"blog",$sql);
    if($query){
        if (mysqli_affected_rows($link)==1) { 
            $result = true;
        }
    }
    return $result;
}

function id_repeat($userid){
    $result = false;
    $sql = "SELECT * 
            FROM  `user` 
            WHERE BINARY `user_ID` = '{$userid}'";

    $link = create_connection();
    $query = execute_sql($link,"blog",$sql);
    if($query){
        if (mysqli_num_rows($query)>=1) { 
            $result = true;
        }
    }
    return $result;
}
?>