<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'cover_image'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
    /**
     * Get all of the posts for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function projects(): BelongsTo
// {
//     return $this->belongsTo(User::class);
// }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}