<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54d0306e88c7333693c892c9cd02f032
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HelloWorldSdk\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HelloWorldSdk\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit54d0306e88c7333693c892c9cd02f032::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54d0306e88c7333693c892c9cd02f032::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54d0306e88c7333693c892c9cd02f032::$classMap;

        }, null, ClassLoader::class);
    }
}
