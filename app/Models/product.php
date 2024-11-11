<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['product_id', 'name', 'description', 'price', 'stock', 'image'];
}
