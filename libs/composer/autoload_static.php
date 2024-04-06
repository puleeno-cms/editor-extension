<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c758a279a798c0ae126182f12779dba
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Quagga\\Extension\\TextEditor\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Quagga\\Extension\\TextEditor\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c758a279a798c0ae126182f12779dba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c758a279a798c0ae126182f12779dba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c758a279a798c0ae126182f12779dba::$classMap;

        }, null, ClassLoader::class);
    }
}
