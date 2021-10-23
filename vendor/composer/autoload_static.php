<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6132a8d05e5e0804be1f31debf7c98f8
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WGenial\\NumeroPorExtenso\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WGenial\\NumeroPorExtenso\\' => 
        array (
            0 => __DIR__ . '/..' . '/wgenial/numeroporextenso/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6132a8d05e5e0804be1f31debf7c98f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6132a8d05e5e0804be1f31debf7c98f8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}