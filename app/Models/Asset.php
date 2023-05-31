<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'url', 'type',
    ];

    public function asset()
    {
        return $this->belongsTo(ProductImages::class);
    }
}