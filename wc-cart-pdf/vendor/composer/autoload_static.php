<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit396d503ab4790c1ddab926736352a480
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WCCartPDF\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WCCartPDF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/dependencies',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit396d503ab4790c1ddab926736352a480::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit396d503ab4790c1ddab926736352a480::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit396d503ab4790c1ddab926736352a480::$classMap;

        }, null, ClassLoader::class);
    }
}