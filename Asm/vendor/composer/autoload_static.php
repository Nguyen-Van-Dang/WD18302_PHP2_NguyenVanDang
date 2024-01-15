<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e54059955e805a8f609ac77b15d5817
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e54059955e805a8f609ac77b15d5817::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e54059955e805a8f609ac77b15d5817::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e54059955e805a8f609ac77b15d5817::$classMap;

        }, null, ClassLoader::class);
    }
}
