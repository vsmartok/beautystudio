<?php

declare(strict_types=1);

namespace BeautyStudio;

use BeautyStudio\Contracts\Registrable;
use BeautyStudio\Modules\Service\Manager as ServiceManager;
use BeautyStudio\Support\I18n;

class Bootstrap
{
    /**
     * @var array<Registrable>
     */
    protected array $modules = [];


    public function __construct()
    {
        $this->modules = [
            new I18n(),
            new ServiceManager(),
        ];
    }


    public function init(): void
    {
        foreach ($this->modules as $module) {
            $module->register();
        }
    }
}
