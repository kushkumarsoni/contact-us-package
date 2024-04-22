<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit01ad85c459f8f59862169fde4f05d5df
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

        spl_autoload_register(array('ComposerAutoloaderInit01ad85c459f8f59862169fde4f05d5df', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit01ad85c459f8f59862169fde4f05d5df', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit01ad85c459f8f59862169fde4f05d5df::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
