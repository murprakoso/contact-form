<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit688ff92c309b8f810a0257d081d4586b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Murprakoso\\Contactform\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Murprakoso\\Contactform\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit688ff92c309b8f810a0257d081d4586b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit688ff92c309b8f810a0257d081d4586b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit688ff92c309b8f810a0257d081d4586b::$classMap;

        }, null, ClassLoader::class);
    }
}