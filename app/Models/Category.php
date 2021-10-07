<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract // level 1 of category relations
{
    use HasFactory, Translatable;

    /**
     * GetRouteKeyName
     *
     * @return void
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $translatedAttributes = [
        'title',
        'slug',
      ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'title',
        // 'slug',
        'image',
        'featured',
    ];

    /**
     * Products
     *
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    /**
     * types
     *
     * @return void
     */
    public function types()
    {
        return $this->hasMany(Type::class);
    }

    /**
     * App\Models\Subtypes
     *
     * @return void
     */
    public function subtypes()
    {
        return $this->hasManyThrough(SubType::class, Type::class);
    }

    /**
     * ScopeActive
     *
     * @return void
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     * ScopeFeatured
     *
     * @ param  mixed $query
     * @return void
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }
}
