<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbf580e75994f8a28f7baa262c25e763
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slug' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/slug.php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitbbf580e75994f8a28f7baa262c25e763::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
