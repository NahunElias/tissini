<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Relación uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function order(){
        return $this->belongsTo(Order::class);
    }
    
    //Relación uno a uno polimorfica

    public function image(){
        return $this->morphOne(Image::class, 'imageable'); 
    }

    //Relación uno a muchos
    
      public function sizes(){
        return $this->hasMany(Size::class);
    }
   

}
