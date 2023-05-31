<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $fillable = [
        'user_id',
        'fitting',
        'gender',
        'back',
        'front',
        'ankle',
        'calf',
        'full_length',
        'hip_round',
        'inseam',
        'thigh',
        'waist',
        'arm_hole',
        'chest',
        'neck',
        'shoulder',
        'sleeve_length',
        'wrist',
        'size',
        'front_image',
        'back_image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'measurement_id');
    }
}
