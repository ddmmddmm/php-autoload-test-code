# php-autoload-test-code
测试php自动加载两种方法

看根目录下的index.php文件

1.第一种方式是直接调用我自己写的 Autoloader::register 方法，其原理是用 spl_autoload_register 方法来注册一个函数，其根据类名require进文件

2.第二种方式是直接用composer提供的自动加载文件
require 'vendor/autoload.php'

需要在composer.json配置一下
```
"autoload": {
    // 额外文件
    "files": [
        "helpers.php"
    ],
    // 自动加载类的命名空间和目录的映射
    "psr-4": {"Fuxx\\": "src/"}
}
```
