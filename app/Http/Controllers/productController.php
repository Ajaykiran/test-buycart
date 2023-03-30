<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;


class productController extends Controller
{
    public function pro_create()
    {
        return view('product.proform');
    }
    
    public function pro_store(Request $request)
    {
    
    
        $product = new product();
        $product->name = $request->name;
        $product->description =  $request->description;
        $product->category =  $request->category;
        $product->price =  $request->price;
        $product->save();
        return redirect('product.product');
    }
    
     function pro() {
        $data=product::all();
        return view('product.product', ['product'=>$data]);
     }
    
     function delete ($id) {
        $data = product::find($id);
        $data->delete();
        return redirect('product.product');
     }

     function userbooking(){
        $data2=product::all();
        {
            return view ('index', ['product'=>$data2]);
        }
     }
}