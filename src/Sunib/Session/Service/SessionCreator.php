<?php

declare(strict_types=1);

namespace Sunib\Session\Service;
use Sunib\Session\Factory\SessionFactory;
use Sunib\Session\Repository\SessionRepository;

/**
 * Class SessionCreator
 * @author valen
 */
final class SessionCreator
{
    public function __construct(
        SessionFactory $factory,
        SessionRepository $repository
    ) {
        $this->factory = $factory;
        $this->repository = $repository;
    }

    /**
     * @param array $payload
     * @return \Sunib\Session\Model\Session
     * @throws \ReflectionException
     */
    public function create(array $payload)
    {
        $sess = $this->factory->create($payload);
        $this->repository->save($sess);
        return $sess;
    }
}