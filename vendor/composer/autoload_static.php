<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfab444e8c56cab2dcc11a553dd37e94e
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wadeshuler\\paypalipn\\' => 21,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wadeshuler\\paypalipn\\' => 
        array (
            0 => __DIR__ . '/..' . '/wadeshuler/php-paypal-ipn/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfab444e8c56cab2dcc11a553dd37e94e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfab444e8c56cab2dcc11a553dd37e94e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
