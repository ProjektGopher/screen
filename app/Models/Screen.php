<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Screen extends Model
{
    use HasFactory;

    public function license(): BelongsTo
    {
        return $this->belongsTo(License::class);
    }

    public function release(): void
    {
        $this->license()->dissociate();
        $this->save();
    }

    public function isClaimed(): bool
    {
        return false;
    }
}
