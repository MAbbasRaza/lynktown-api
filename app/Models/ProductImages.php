<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $fillable = [
        'asset_id',
        'product_id',
    ];
    // public function image()
    // {
    //     return $this->belongsTo(Asset::class, 'img_id');
    // }
    public function productImage()
    {
        return $this->belongsTo(Asset::class, 'asset_id');
    }
}
