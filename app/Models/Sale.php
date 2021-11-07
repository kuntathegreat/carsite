<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

 	protected $table = 'sales';

    protected $primaryKey = 'id'

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'date',
        'payment_mode',
    ];

    public function users()
    {
    	return $this->belongsTo(User::class);
    }

}
