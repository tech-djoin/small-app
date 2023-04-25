<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit343eef1b2f0acfc1f301f944d6855639
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TechDjoin\\SmallApp\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TechDjoin\\SmallApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit343eef1b2f0acfc1f301f944d6855639::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit343eef1b2f0acfc1f301f944d6855639::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit343eef1b2f0acfc1f301f944d6855639::$classMap;

        }, null, ClassLoader::class);
    }
}
