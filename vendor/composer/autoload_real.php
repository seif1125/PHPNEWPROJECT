<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb3ed8ce129e68c768c156756ac3a75a1
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

        spl_autoload_register(array('ComposerAutoloaderInitb3ed8ce129e68c768c156756ac3a75a1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb3ed8ce129e68c768c156756ac3a75a1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb3ed8ce129e68c768c156756ac3a75a1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
