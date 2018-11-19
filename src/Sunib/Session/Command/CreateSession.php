<?php
declare(strict_types=1);

namespace Sunib\Session\Command;

use Pandawa\Component\Message\AbstractCommand;
use Pandawa\Component\Message\NameableMessageInterface;
use Pandawa\Component\Support\NameableClassTrait;

/**
 * Class CreateSessionCommand
 * @author Valentino Ekaputra <valentino.ekaputra@live.com>
 */
class CreateSession extends AbstractCommand implements NameableMessageInterface
{
    use NameableClassTrait;

    private $name;

    public function getName(): string
    {
        return $this->name;
    }
}