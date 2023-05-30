<?php

namespace App\Models;

use App\Models\ville;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Horaire extends Model
{
    use HasFactory;

    public function ville():BelongsTo{
        return $this->belongsTo(ville::class);
    }
}
