<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        return $this->belongsTo(Genre::class);
    }

    public function prefectures(): BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }
}
