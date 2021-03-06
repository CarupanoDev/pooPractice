<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ccb0798b02b2625348545f46fae146a
{
    public static $files = array (
        '70486abe8697dad964af3c241028db5b' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enigmaticNerd\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enigmaticNerd\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ccb0798b02b2625348545f46fae146a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ccb0798b02b2625348545f46fae146a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
