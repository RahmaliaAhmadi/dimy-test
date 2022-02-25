<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function get_transaction($id){
        $data = Transactions::find($id);
        $data->product_name = $data->product->price;
        $data->payment_method = $data->payment->name;
        $data->customer_name = $data->address->customer->customer_name;
        $data->customer_address = $data->address->address;
        return response()->json($data,200);
    }
}
