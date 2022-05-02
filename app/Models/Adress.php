<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function adresstypes(){
        return $this->belongsToMany(Adresstype::class, 'adress_adresstype');
    }
    public function users(){
        return $this->belongsToMany(User::class, 'adress_user');
    }
}
