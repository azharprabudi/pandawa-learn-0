<?php

declare(strict_types=1);

namespace Sunib\Student;

use Pandawa\Component\Module\AbstractModule;

/**
 * Class SunibStudentModule
 * @author valen
 */
final class SunibStudentModule extends AbstractModule
{
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