<?php

declare(strict_types=1);

namespace BeautyStudio\Support;


class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(function (string $class): void {
            $prefix = 'BeautyStudio\\';

            if ($class[0] !== $prefix[0] || !str_starts_with($class, $prefix)) {
                return;
            }

            $relativeClass = substr($class, strlen(($prefix)));

            $filePath = BEAUTYSTUDIO_DIR . 'src' . DIRECTORY_SEPARATOR  . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';

            if (! is_file($filePath)) {
                return;
            }

            require_once $filePath;
        });
    }
}
