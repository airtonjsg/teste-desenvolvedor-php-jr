<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function client(){
        return $this->belongTo(Client::class);
    }
}