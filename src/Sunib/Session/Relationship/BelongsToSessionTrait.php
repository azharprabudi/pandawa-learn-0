<?php

declare(strict_types=1);

namespace Sunib\Session\Relationship;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Pandawa\Component\Ddd\RelationshipBehaviorTrait;
use Sunib\Session\Model\Session;

/**
 * Trait BelongsToSessionTrait
 * @author valen
 */
trait BelongsToSessionTrait
{
    use RelationshipBehaviorTrait;

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class, 'class_id');
    }
}