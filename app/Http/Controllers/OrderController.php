<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $pickupMethod = $request->input('pickup_method', 'gerai');
        session(['pickup_method' => $pickupMethod]);
        
        // Get the current user's cart
        $cartModel = Cart::where('user_id', auth()->id())->with('items.product')->first();

        // If user has no cart yet, send empty array
        if (!$cartModel) {
            $cart = [];
        } else {
            // Map data into array for Blade
            $cart = $cartModel->items->map(function ($item) {
                return [
                    'code_product' => $item->code_product,
                    'name' => $item->product->name ?? 'Unknown Product',
                    'price' => (float) ($item->product->price ?? 0),
                    'quantity' => (int) $item->quantity,
                    'variants' => $item->variants ?? ['Original' => 0, 'Yamin' => 0, 'Chili Oil' => 0],
                ];
            })->toArray();
        }

        return view('components.rincian-harga', compact('cart'));
    }

    public function history(Request $request){
        // $query = Order::query();

        // if ($request->from_date && $request->to_date) {
        //     $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
        // }

        // $orders = $query->get();
        $orders = '';

        return view('admin.riwayat-pesanan', compact('orders'));
    }
}
