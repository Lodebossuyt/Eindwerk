<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function colors(){
        return $this->belongsToMany(Color::class, "car_color");
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function drivetrain(){
        return $this->belongsTo(Drivetrain::class);
    }

    public function transmission(){
        return $this->belongsTo(Transmission::class);
    }
    public function photos(){
        return $this->morphToMany(Photo::class, 'photoable');
    }
    public function fueltype(){
        return $this->belongsTo(Fueltype::class);
    }
    public function bodytype(){
        return $this->belongsTo(Bodytype::class);
    }
}
