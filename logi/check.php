<?php
header('content-type=text/html;charset=utf8');
$zhanghao=$_REQUEST['email'];
$pass=$_REQUEST['password'];
if($zhanghao=='admin@163.com'&& $pass=='123456'){
    $mess='登录成功';
    $href='lo.html';
}else{
    $mess='登录失败';
    $href='index.html';
}
include_once 'index.html';




?>