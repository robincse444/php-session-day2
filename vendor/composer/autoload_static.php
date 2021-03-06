<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac5427e1def199d0fe21c21d5c93cae9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac5427e1def199d0fe21c21d5c93cae9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac5427e1def199d0fe21c21d5c93cae9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac5427e1def199d0fe21c21d5c93cae9::$classMap;

        }, null, ClassLoader::class);
    }
}
