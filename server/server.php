<?php
include ("lib/phprpc_server.php");
function HelloWorld() {
    debug_print_backtrace();
    return 'Hello World!<br>';
}

class Wangnima {
    function caonima(){
        return 'this is Wangnima::caonima()<br>';
    }
}

class Shabi {
    function caonima(){
        return 'this is Shabi::caonima()<br>';
    }
}

function nimabi(){
    return 'this is nimabi';
}

$server = new PHPRPC_Server();

//直接注册裸函数
$server->add('HelloWorld');

//为裸函数起别名
$server->add('nimabi', null, 'cao');

//同方法异类，使用别名区别
$server->add('caonima', 'Wangnima');
$server->add('caonima', 'Shabi', 'shenjingbing');

$server->start();

