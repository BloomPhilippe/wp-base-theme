<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48bde664d8eca0f0950ad957314c9b25
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48bde664d8eca0f0950ad957314c9b25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48bde664d8eca0f0950ad957314c9b25::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
