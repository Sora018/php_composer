<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit757b072d2e65c1e274448b30cfc79983
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit757b072d2e65c1e274448b30cfc79983::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit757b072d2e65c1e274448b30cfc79983::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit757b072d2e65c1e274448b30cfc79983::$classMap;

        }, null, ClassLoader::class);
    }
}
