<?php

declare(strict_types=1);

namespace Sunib\Session\Model;

use Pandawa\Component\Ddd\AbstractModel;
use Sunib\Student\Relationship\HasManyStudentTrait;

/**
 * Class Session
 * @author valen
 */
class Session extends AbstractModel
{
    use HasManyStudentTrait;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'code'
    ];
}