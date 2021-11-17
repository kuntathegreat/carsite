<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = ['file_path'];

    public function vehicle(){
        $this->belongsTo('app\Models\Vehicle', 'vehicle_id');
    }
}
