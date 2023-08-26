<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitee506a6142946c550ce4f81e9b63a07d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitee506a6142946c550ce4f81e9b63a07d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitee506a6142946c550ce4f81e9b63a07d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitee506a6142946c550ce4f81e9b63a07d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
