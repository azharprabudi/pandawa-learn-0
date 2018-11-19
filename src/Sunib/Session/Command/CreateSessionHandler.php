<?php
declare(strict_types=1);

namespace Sunib\Session\Command;
use Sunib\Session\Factory\SessionFactory;
use Sunib\Session\Repository\SessionRepository;
use Sunib\Session\Service\SessionCreator;

/**
 * Class CreateSessionHandler
 * @author valen
 */
final class CreateSessionHandler
{
    /**
     * @var SessionCreator
     */
    private $creator;

    public function __construct(
        SessionCreator $creator
    ) {
        $this->creator = $creator;
    }

    /**
     * @param CreateSession $message
     * @return \Sunib\Session\Model\Session
     * @throws \ReflectionException
     */
    public function handle(CreateSession $message)
    {
        return $this->creator->create($message->payload()->all());
    }
}