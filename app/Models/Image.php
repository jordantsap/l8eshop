<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['product_id', 'filepath'];

    /**
     * @return $product->images;
     */
    public function products()
    {
        return $this->morphedByMany(Product::class, 'imageable');
    }

}
