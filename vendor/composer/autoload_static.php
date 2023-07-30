<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d89c53a52dee0d6820d0cad93384316
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\' => 5,
        ),
        'P' => 
        array (
            'Post\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/User',
        ),
        'Post\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Post',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d89c53a52dee0d6820d0cad93384316::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d89c53a52dee0d6820d0cad93384316::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d89c53a52dee0d6820d0cad93384316::$classMap;

        }, null, ClassLoader::class);
    }
}