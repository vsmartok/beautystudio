<?php

declare(strict_types=1);

namespace BeautyStudio\Support;

use BeautyStudio\Contracts\Registrable;

final class I18n implements Registrable
{
    public function register(): void
    {
        add_action('init', [$this, 'loadTextdomain']);
    }


    public function loadTextdomain(): void
    {
        load_plugin_textdomain(
            'beautystudio',
            false,
            dirname(plugin_basename(BEAUTYSTUDIO_FILE)) . '/languages'
        );
    }
}
