<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
    	'user_id',
        'vehicle_id',
        'date',
        'payment_mode'
    ];

    public function vehicle(){
        $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
