<?php

namespace App\Models;

use App\Models\ville;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pays extends Model
{
    use HasFactory;

    public function ville():HasMany {
        return $this-> hasMany(ville::class);
    }
}
