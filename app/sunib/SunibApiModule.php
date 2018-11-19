<?php
declare(strict_types=1);


namespace Sunib\Api;


use Pandawa\Component\Module\AbstractModule;
use Pandawa\Component\Module\Provider\RouteProviderTrait;

class SunibApiModule extends AbstractModule
{
    use RouteProviderTrait;

    protected function routes(): array
    {
        return [
            [
                'type'       => 'group',
                'middleware' => '',
                'prefix'     => '',
                'children'   => $this->getCurrentPath() . '/Resources/routes/routes.yaml',
            ],
        ];
    }
}