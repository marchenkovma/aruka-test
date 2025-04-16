<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'slug',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function getTitleAttribtute()
    {

    }
    // Связь "многие ко одному" с моделью User
    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Связь "многие ко многим" с моделью Category
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    // Связь "многие ко многим" с моделью Tag
    public function tags(): belongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
