<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03e7e4f277aacacb664fba947f02e540
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Huoban\\Models\\' => 14,
            'Huoban\\Helpers\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Huoban\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Huoban\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/helpers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03e7e4f277aacacb664fba947f02e540::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03e7e4f277aacacb664fba947f02e540::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
