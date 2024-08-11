<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class People extends Model
{
    use HasFactory;

    protected $table = 'peoples';

    public function numberPeoples(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
