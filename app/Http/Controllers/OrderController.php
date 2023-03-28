<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    public function create()
{
    return view('orders.create');
}
public function pro_create()
{
    return view('product.proform');
}

public function store(Request $request)
{


    $order = new Order();
    $order->customer_name = $request->customer_name;
    $order->email =  $request->email;
    $order->address =  $request->address;
    $order->total_amount =  $request->total_amount;
    $order->product =  $request->product;
    $order->save();
    return redirect('list');
}

 function list() {
    $data=order::all();
    return view('list', ['order'=>$data]);
 }

 function delete ($id) {
    $data = order::find($id);
    $data->delete();
    return redirect('list');
 }

}



