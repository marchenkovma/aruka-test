<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // Связь "многие ко многим" с моделью Article
    public function articles(): belongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
