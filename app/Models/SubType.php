<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class SubType extends Model implements TranslatableContract // level 3 of category relations
{
    use HasFactory, Translatable;

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

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
        'type_id',
    ];
    public function type()
    {
        return $this->belongsTo( Type::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
