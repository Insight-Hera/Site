<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23695618ba262b75f7099b6a406d448b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23695618ba262b75f7099b6a406d448b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23695618ba262b75f7099b6a406d448b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23695618ba262b75f7099b6a406d448b::$classMap;

        }, null, ClassLoader::class);
    }
}
