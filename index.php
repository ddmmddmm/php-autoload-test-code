<?php
/**
 * 自动加载测试
 */
require 'myAutoload.php';
//require 'vendor/autoload.php';

// helpers.php 中的函数
helpersOk();

// src目录下的类
$hello = new \Fuxx\app\Good();
$hello->go();