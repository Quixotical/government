<?php

namespace App\Models;

/**
 * Class Bill
 * @package App\Models
 * @property string $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read \App\Models\User $locations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BillIteration $billIterations
 */
class Bill extends BaseModel
{
    /**
     * Belongs to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users() {
        return $this->belongsTo(User::class);
    }

    /**
     * Has many bill iterations
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billIterations() {
        return $this->hasMany(BillIteration::class);
    }
}
