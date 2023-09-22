<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
    protected $fillable = ['product_id','name', 'description', 'price', 'image_url'];
}