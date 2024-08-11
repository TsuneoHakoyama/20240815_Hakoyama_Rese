<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre_id',
        'prefecture_id',
        'detail',
        'image',
    ];

    public function genres(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function prefectures(): BelongsTo
    {
        return $this->belongsTo(Prefecture::class, 'prefecture_id');
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
