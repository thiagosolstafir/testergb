<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf315154a8d7c762f271f8bcc2ea5b345
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf315154a8d7c762f271f8bcc2ea5b345::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf315154a8d7c762f271f8bcc2ea5b345::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf315154a8d7c762f271f8bcc2ea5b345::$classMap;

        }, null, ClassLoader::class);
    }
}
