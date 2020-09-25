<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c099129b8d10c8250db97ea5798fecb
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thongnv\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thongnv\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/thongnv',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c099129b8d10c8250db97ea5798fecb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c099129b8d10c8250db97ea5798fecb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
