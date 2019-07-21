<?php
header("content-type:text/html;charset=utf8");//调整页面编码格式
//编码    utf-8  国际通用编码   一个英文字符占一个字节  汉字占4个字节
//gb2312   国家 标准  各占两个
//gbk
//连接数据库
$link=mysqli_connect('127.0.0.1','root','','1704phpA');//
//面向过程
//设置字符
mysqli_query($link,'set names  utf8');
//组织sql语句
$sql="select  *  from  goods";
$reslut=mysqli_query($link,$sql);//执行查询语句
$data=mysqli_fetch_all($reslut,1);
print_r($data);
//执行sql语句
mysqli_free_result($reslut);//释放结果集
//关闭数据库
mysqli_close($link);