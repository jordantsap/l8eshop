<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use BinaryCats\Sku\HasSku;

class Product extends Model implements TranslatableContract
{
    use Translatable, HasFactory, HasSku;

    // change default primary key
    public function getRouteKeyName()
    {
        return 'slug';
    }
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    // protected $primaryKey = 'slug';

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    // protected $keyType = 'string';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    // public $incrementing = false;

    protected $translatedAttributes = [
        // 'meta_description',
        // 'meta_keywords',
        'title',
        'slug',
        'description',
    ];

    protected $fillable = [
        // 'title',
        // 'slug',
        // 'description',
        'quantity',

        // 'image_id',
        'slider',
        'sku',
        'price',
        'active',
        'homepage',

        'logo',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',

        'category_id',
        'type_id',
        'sub_type_id',
        'color_id',
        'brand_id',
    ];

    /**
     * @return $product->images
     */
    // public function images()
    // {
    //     return $this->hasMany(Image::class);
    // }
    /**
     * Get all of the tags for the post.
     */
    public function images()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class)->withPivot('value');
    }

    public function favorite()
    {
        return $this->belongsToMany(Favorite::class);
    }
    /**
     * Tags
     *
     * @return void
     */
    public function tags()
    {
        return $this->belongsToMany(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function subtype()
    {
        return $this->belongsTo(SubType::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }
    public function scopeAddToSlider($query)
    {
        return $query->where('slider', 1);
    }

}
