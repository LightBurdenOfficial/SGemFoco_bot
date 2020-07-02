<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07006199c91a115ab2b5072a339e067e
{
    public static $files = array (
        '60485befb91f39a927e5665f589d340e' => __DIR__ . '/../..' . '/src/PHPTelebot.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TeleBot\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TeleBot\\' => 
        array (
            0 => __DIR__ . '/..' . '/radyakaze/telebot/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07006199c91a115ab2b5072a339e067e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07006199c91a115ab2b5072a339e067e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}