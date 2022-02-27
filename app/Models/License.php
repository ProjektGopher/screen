<?php

namespace App\Models;

use App\Enums\LicenseTypes;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\NotImplementedException;
use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class License extends Model
{
    use HasFactory;
    use GeneratesUuid;

    protected $casts = [
        'type' => LicenseTypes::class,
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function transferTo(Team $team): void
    {
        $this->team()->associate($team)->save();
    }
}
