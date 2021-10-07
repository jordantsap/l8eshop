<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Type extends Model implements TranslatableContract // level 2 of category relations
{
    use HasFactory, Translatable;

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'title',
        // 'slug',
        'image',
        'category_id',
        'active',
    ];
    protected $translatedAttributes = [
        'title',
        'slug',
      ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subtypes()
    {
        return $this->hasMany(Subtype::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function categories()
    {
        return $this->hasManyThrough(SubType::class, Type::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
