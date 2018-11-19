<?php

declare(strict_types=1);

namespace Sunib\Session;

use Pandawa\Component\Module\AbstractModule;
use Pandawa\Component\Module\Provider\EventProviderTrait;
use Pandawa\Component\Module\Provider\SecurityProviderTrait;
use Pandawa\Component\Module\Provider\ViewProviderTrait;

/**
 * Class SunibSessionModule
 * @author valen
 */
final class SunibSessionModule extends AbstractModule
{
    use EventProviderTrait, SecurityProviderTrait, ViewProviderTrait;

    /**
     * @return array
     */
    protected function policies(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    protected function listens(): array
    {
        return [

        ];
    }
}