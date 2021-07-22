<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;

    //Relación uno a muchos inversa

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
