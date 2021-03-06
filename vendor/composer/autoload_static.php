<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1818dc00cbcd03a82bd00fbdfef6e010
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1818dc00cbcd03a82bd00fbdfef6e010::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1818dc00cbcd03a82bd00fbdfef6e010::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
