<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show()
    {   
        $product = Product::all();
        return view('menu', ['product'=>$product]);
    }

    public function produk()
    {   
        $product = Product::all();
        return view('admin.produk', ['products'=>$product]);
    }

    public function destroy($id)
    {
        // Example only — in a real app, you'd delete from the DB
        return redirect()->route('admin.produk')->with('success', 'Product deleted successfully');
    }


}
