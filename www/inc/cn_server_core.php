<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/cn_header_core.php";



//版面内容
$sql='select intro,content from pageset WHERE id_pageset = 4';
$pageinfo = $db->queryOne($sql);


$sql='select opicname as pic from pagesetpic WHERE id_pageset = 4 order by ordernum asc limit 4';
$pagebanner = $db->queryAll($sql);

//其他签证
$sql='select * from productinfo WHERE tag like "%热门移民项目%" order by ordernum desc limit 4';
$hotcase = $db->queryAll($sql);
?>