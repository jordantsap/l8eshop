<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'orders';
    protected $fillable = [
        'customer_id', 'billing_email', 'billing_name', 'billing_address', 'billing_city', 'billing_province', 'billing_postalcode', 'billing_phone', 'billing_subtotal', 'billing_tax', 'billing_total', 'billing_other_info',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity');
    }

}
