<?php

declare(strict_types=1);

namespace Sunib\Student\Relationship;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Pandawa\Component\Ddd\RelationshipBehaviorTrait;
use Sunib\Student\Model\Student;

/**
 * Trait HasManyStudentTrait
 * @author valen
 */
trait HasManyStudentTrait
{
    use RelationshipBehaviorTrait;

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}