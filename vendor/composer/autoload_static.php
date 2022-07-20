<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d98cb78380a703b94fbedd0f9105f24
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mahdi\\He\\' => 9,
        ),
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mahdi\\He\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d98cb78380a703b94fbedd0f9105f24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d98cb78380a703b94fbedd0f9105f24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d98cb78380a703b94fbedd0f9105f24::$classMap;

        }, null, ClassLoader::class);
    }
}
