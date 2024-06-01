<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'description', 'price', 'stock','color', 'image','discount'];

    public $incrementing = false;
    protected $keyType = 'string';

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function shoppingCart()
    {
        return $this->hasMany(Cart::class);
    }
}
