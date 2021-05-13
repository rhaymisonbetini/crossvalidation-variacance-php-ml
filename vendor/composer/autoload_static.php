<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcabc86b63877948678dd256993a1dc62
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phpml\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcabc86b63877948678dd256993a1dc62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcabc86b63877948678dd256993a1dc62::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcabc86b63877948678dd256993a1dc62::$classMap;

        }, null, ClassLoader::class);
    }
}
