<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit621cc84b9b28a211b638f288432ce80e
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit621cc84b9b28a211b638f288432ce80e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit621cc84b9b28a211b638f288432ce80e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
