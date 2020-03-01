<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8553673db02b2a444a853f28e16196e
{
    public static $files = array (
        'f32902f145fce7a432f59959f59e5a18' => __DIR__ . '/../..' . '/app/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpspider\\' => 10,
        ),
        'I' => 
        array (
            'IYUU\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpspider\\' => 
        array (
            0 => __DIR__ . '/..' . '/owner888/phpspider',
        ),
        'IYUU\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Curl' => 
            array (
                0 => __DIR__ . '/..' . '/curl/curl/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8553673db02b2a444a853f28e16196e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8553673db02b2a444a853f28e16196e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd8553673db02b2a444a853f28e16196e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
