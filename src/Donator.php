<?php

namespace Diglabby\Doika;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $email
 * @property string|null $name
 * @property int|null $phone
 *
 * Relationships:
 * @property-read Collection|Subscription[] $subscriptions
 * @property-read Collection|Transaction[] $transactions
 */
final class Donator extends Model
{
    public function subscriptions(): HasMany
    {
        $this->hasMany(Subscription::class);
    }

    public function transactions(): HasMany
    {
        $this->hasMany(Transaction::class);
    }
}
