<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'models';

    protected $fillable = [
        'name'
    ];

    public function vehicles()
    {
        $this->hasMany('app\Models\Vehicle', 'model_id');
    }
}
