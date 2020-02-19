<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['product_id', 'customer_id', 'quantity', 'price', 'payment_received'];
}
