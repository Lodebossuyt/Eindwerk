<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresstype extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function adresses(){
        $this->belongsToMany(Adress::class, 'adress_adresstype');
    }
}
