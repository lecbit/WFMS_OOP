<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit058a89a31726643106702312690674e1
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfmPapka\\' => 9,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfmPapka\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfmPapka',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit058a89a31726643106702312690674e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit058a89a31726643106702312690674e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit058a89a31726643106702312690674e1::$classMap;

        }, null, ClassLoader::class);
    }
}
