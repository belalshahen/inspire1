<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit771ef4324e14e8256be538a0c259cc01
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shaheen\\Inspire\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shaheen\\Inspire\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit771ef4324e14e8256be538a0c259cc01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit771ef4324e14e8256be538a0c259cc01::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit771ef4324e14e8256be538a0c259cc01::$classMap;

        }, null, ClassLoader::class);
    }
}
