<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Variant extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

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
        'category_id',
        'active',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
