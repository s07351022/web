<?php
    require_once 'dbtools.inc.php';
    $result = null;
    $sql = "SELECT * 
            FROM  `user`";

    $link = create_connection();
    $query = execute_sql($link,"blog",$sql);
    while($row = mysqli_fetch_array($query)){
        echo $row["user_ID"];
    }
?>