<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78739f2aec60bf65132d272957387842
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit78739f2aec60bf65132d272957387842::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78739f2aec60bf65132d272957387842::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78739f2aec60bf65132d272957387842::$classMap;

        }, null, ClassLoader::class);
    }
}
