<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function order(){
        $this->belongsTo(Order::class);
    }
    public function car(){
        $this->belongsTo(Car::class);
    }

}
