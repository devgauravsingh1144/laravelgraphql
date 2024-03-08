<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

   // http://localhost:8000/graphql?query=query+{getProduct{product_id,product_name,product_description}}

    protected $fillable = [
        'product_id',
        'product_name',
        'product_description',
    ];
}
