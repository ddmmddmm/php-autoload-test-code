<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13ef91e15949fc317815a91c6c42b9b0
{
    public static $files = array (
        '722750bb8891a559ed8939f073621f0a' => __DIR__ . '/../..' . '/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fuxx\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fuxx\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13ef91e15949fc317815a91c6c42b9b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13ef91e15949fc317815a91c6c42b9b0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
