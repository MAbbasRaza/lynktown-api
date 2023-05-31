<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'store_id', 'business_id', 'total_price', 'subtotal_price',
        'shipping_address', 'shipping_charges', 'order_start_date', 'customer_name', 'phone_no',
        'note', 'status', 'measurement_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function lynk()
    {
        return $this->belongsTo(Lynk::class);
    }

    public function measurement()
    {
        return $this->belongsTo(Measurement::class);
    }
}
