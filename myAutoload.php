<?php
/**
 * 自动加载
 */
// 加载额外的文件
require_once 'helpers.php';

// 加载类
// 遇到未定义的类时就会调用myLoad方法
spl_autoload_register('myLoad');

/**
 * 遇到未定义的类时该方法就会被调用，用这个来require类
 * @param string className 类名，会包含命名空间
 * @Author linzishuang
 * @Date 2019/9/6
 */
function myLoad($className)
{
    // 若命名空间名称与顶级目录名不一样，需要做一下映射
    $config = [
        'Fuxx\\' => 'src/'
    ];

    if ($config && is_array($config)) {
        foreach ($config as $k => $v) {
            $className = str_replace($k, $v, $className);
        }
    }

    require_once $className . '.php';
}
