<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ab5a7c9da43b92e4bdd718234c0eecb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aksam\\Contact\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aksam\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ab5a7c9da43b92e4bdd718234c0eecb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ab5a7c9da43b92e4bdd718234c0eecb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ab5a7c9da43b92e4bdd718234c0eecb::$classMap;

        }, null, ClassLoader::class);
    }
}
