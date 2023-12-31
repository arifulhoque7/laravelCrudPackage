<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee506a6142946c550ce4f81e9b63a07d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Arif\\Crud\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Arif\\Crud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee506a6142946c550ce4f81e9b63a07d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee506a6142946c550ce4f81e9b63a07d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee506a6142946c550ce4f81e9b63a07d::$classMap;

        }, null, ClassLoader::class);
    }
}
