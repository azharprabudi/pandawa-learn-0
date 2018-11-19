<?php

declare(strict_types=1);

namespace Sunib\Student\Model;

use Pandawa\Component\Ddd\AbstractModel;
use Sunib\Session\Relationship\BelongsToSessionTrait;

/**
 * Class Student
 * @author valen
 */
class Student extends AbstractModel
{
    use BelongsToSessionTrait;

    /**
     * @var array
     */
    protected $fillable = [
        'class_id',
        'nim',
        'name'
    ];
}