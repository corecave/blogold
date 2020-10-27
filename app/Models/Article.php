<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "category_id",
        "featured_image",
        "excerpt",
        "status",
        "schedualed_at",
        "content",
    ];

    protected $dates = [
        "schedualed_at",
    ];

    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value);

        while ($this->newQuery()->where('slug', $slug)->count()) {
            $slug .= '-' . substr(md5(uniqid()), 0, 8);
        }

        $this->attributes['slug'] = $slug;
    }
}
