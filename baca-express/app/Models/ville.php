<?php

namespace App\Models;

use App\Models\pays;
use App\Models\Horaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ville extends Model
{
    use HasFactory;


    public function pays(): BelongsTo{
        return $this-> belongsTo(pays::class);
    }
    public function horaire():HasMany{
        return $this-> hasMany(Horaire::class);
    }
}
