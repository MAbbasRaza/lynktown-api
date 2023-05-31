<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlterationRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'store_id',
        'business_id',
        'user_id',
        'photo_id',
        'status',
        'reason',
    ];


    public function defectedProductPhoto()
    {
        return $this->hasMany(DefectedProductPhoto::class, 'alteration_request_id');
    }
}
