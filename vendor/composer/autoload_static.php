<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a3b926fefba682512bb4792c573a020
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'XBundleLoader' => __DIR__ . '/../..' . '/src/xbundle.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a3b926fefba682512bb4792c573a020::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a3b926fefba682512bb4792c573a020::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3a3b926fefba682512bb4792c573a020::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3a3b926fefba682512bb4792c573a020::$classMap;

        }, null, ClassLoader::class);
    }
}
