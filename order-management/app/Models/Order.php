<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [];
    
    public function client(){
        return $this->belongTo(Client::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}