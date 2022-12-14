<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3e967744f255fb4d8e907f0a087cb08
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aluno\\ProjetoSite\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aluno\\ProjetoSite\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3e967744f255fb4d8e907f0a087cb08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3e967744f255fb4d8e907f0a087cb08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc3e967744f255fb4d8e907f0a087cb08::$classMap;

        }, null, ClassLoader::class);
    }
}
