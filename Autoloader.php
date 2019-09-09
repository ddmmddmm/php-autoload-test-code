<?php

/**
 * 自动加载
 * @Date 2019/9/9
 */
class Autoloader
{
    /**
     * 注册一个自动加载的处理方法
     *
     * 尽管 __autoload() 函数也能自动加载类和接口，但更建议使用 spl_autoload_register() 函数。
     * spl_autoload_register() 提供了一种更加灵活的方式来实现类的自动加载（同一个应用中，可以支持任意数量的加载器，比如第三方库中的）。
     * 因此，不再建议使用 __autoload() 函数，在以后的版本中它可能被弃用。
     *
     *  use example
        require 'Autoloader.php';

        // 若命名空间名称与顶级目录名不一样，需要做一下映射
        $config = [
            'files' => [// 填写相对路径
                'helpers.php'
            ],
            'map' => ['Fuxx\\' => 'src/']
        ];

        Autoloader::register($config);
     *
     * @param $config
     * @Date 2019/9/9
     */
    public static function register($config)
    {

        // 加载额外文件
        $files = $config['files'] ?? null;
        if ($files && is_array($files)) {
            foreach ($files as $fileName) {
                if (file_exists($fileName)) {
                    require_once $fileName;
                }
            }
        }

        spl_autoload_register(function ($className) use ($config) {
            $fileName = $className . '.php';

            // 若有命名空间与路径的映射
            $map = $config['map'] ?? null;
            if ($map && is_array($map)) {
                foreach ($map as $nameSpace => $basePath) {
                    if ($nameSpace && $basePath) {
                        // 只替换最开头匹配到的
                        if (0 === strpos($className, $nameSpace)) {
                            $className = str_replace($nameSpace, $basePath, $className);
                            $tmp = $className . '.php';
                            if (file_exists($tmp)) {
                                $fileName = $tmp;
                                // 匹配到第一个就直接结束
                                break;
                            }
                        }
                    }
                }
            }

            if (file_exists($fileName)) {
                require_once $fileName;
            }
        });
    }
}
