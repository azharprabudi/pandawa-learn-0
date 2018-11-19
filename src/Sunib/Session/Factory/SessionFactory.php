<?php

declare(strict_types=1);

namespace Sunib\Session\Factory;
use Sunib\Session\Model\Session;

/**
 * Class SessionFactory
 * @author valen
 */
final class SessionFactory
{
    public function create(array $payload): Session
    {
        $sess = new Session();

        $sess->name = $payload['name'];
        $sess->code = md5($payload['name']);

        return $sess;
    }
}