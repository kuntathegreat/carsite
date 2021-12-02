<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'color',
        'category_id',
        'availability',
        'user_id',
        'model_id',
        'location',
        'condition',
        'second_condition',
        'transmission',
        'fuel',
        'body',
        'mileage',
        'description'
    ];

    public function brand(){
        $this->belongsTo('app\Model\Brand', 'model_id');
    }

    public function category(){
        $this->belongsTo('app\Model\Brand', 'category_id');
    }

    public function pictures(){
        $this->hasMany('app\Model\Picture', 'vehicle_id');
    }
}
