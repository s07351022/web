<?php
require_once 'functions.php';
$check = register_user($_POST['userid'],$_POST['userpw']);
//搜尋資料庫資料
if($check){
    echo 'yes';
}
else{
    echo 'no';
}
?>