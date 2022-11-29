<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function university(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(University::class);

    }
}