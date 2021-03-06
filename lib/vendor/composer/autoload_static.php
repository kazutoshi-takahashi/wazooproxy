<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7dc9cfb8d0d00e37d334cd5c519dc1a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Payjp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Payjp\\' => 
        array (
            0 => __DIR__ . '/..' . '/payjp/payjp-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7dc9cfb8d0d00e37d334cd5c519dc1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7dc9cfb8d0d00e37d334cd5c519dc1a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
