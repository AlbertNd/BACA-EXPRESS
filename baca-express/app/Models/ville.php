<?php

namespace App\Models;

use App\Models\pays;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ville extends Model
{
    use HasFactory;

    public function pays(): BelongsTo{
        return $this-> belongsTo(pays::class);
    }
}
