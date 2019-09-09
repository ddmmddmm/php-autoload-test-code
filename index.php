<?php
/**
 * 自动加载测试
 */
// 使用composer的自动加载文件
// require 'vendor/autoload.php';

// 使用自己写的自动加载类
require 'Autoloader.php';

// 若命名空间名称与顶级目录名不一样，需要做一下映射
$config = [
    'files' => [// 填写相对路径
        'helpers.php'
    ],
    'map' => ['Fuxx\\' => 'src/']
];

Autoloader::register($config);

// 测试 helpers.php 中的函数
helpersFunc();

// 测试 src 目录下的类
$hello = new \Fuxx\Hello();
$hello->helloFunc();

// 测试 src/app 目录下的类
$good = new \Fuxx\app\Good();
$good->goodFunc();
