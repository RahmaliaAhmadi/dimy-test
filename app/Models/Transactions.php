<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'product_id',
        'payment_method_id',
        'address_id',
    ];

    public function product(){
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }

    public function payment(){
        return $this->belongsTo(PaymentMethods::class, 'payment_method_id', 'id');
    }

    public function address(){
        return $this->belongsTo(CustomerAddress::class, 'address_id', 'id');
    }
}
