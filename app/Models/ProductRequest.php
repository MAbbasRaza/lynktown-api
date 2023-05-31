<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRequest extends Model
{
    use HasFactory;
    
    protected $table = 'product_requests';

    public function orderRequest()
    {
        return $this->belongsTo(OrderRequest::class, 'order_request_id');
    }
}
