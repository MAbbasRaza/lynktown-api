<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefectedProductPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'exchange_request_id',
        'product_id',
        'image_url',
    ];

    public function exchangeRequest()
    {
        return $this->belongsTo(ExchangeRequest::class);
    }

    public function alterRequest()
    {
        return $this->belongsTo(AlterationRequest::class);
    }

}
