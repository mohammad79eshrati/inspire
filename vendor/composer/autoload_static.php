<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc263b6be9831362fccf793002bd54742
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mohammad79eshrati\\Inspire\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mohammad79eshrati\\Inspire\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc263b6be9831362fccf793002bd54742::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc263b6be9831362fccf793002bd54742::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc263b6be9831362fccf793002bd54742::$classMap;

        }, null, ClassLoader::class);
    }
}