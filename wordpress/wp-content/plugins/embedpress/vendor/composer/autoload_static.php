<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit892912675c615e61d62bcd5adc416c51
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PriyoMukul\\WPNotice\\' => 20,
        ),
        'E' => 
        array (
            'Embera\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PriyoMukul\\WPNotice\\' => 
        array (
            0 => __DIR__ . '/..' . '/priyomukul/wp-notice/src',
        ),
        'Embera\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpdevelopers/embera/src/Embera',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit892912675c615e61d62bcd5adc416c51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit892912675c615e61d62bcd5adc416c51::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit892912675c615e61d62bcd5adc416c51::$classMap;

        }, null, ClassLoader::class);
    }
}
