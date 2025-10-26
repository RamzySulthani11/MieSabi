<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $pickupMethod = $request->input('pickup_method', 'gerai');
        session(['pickup_method' => $pickupMethod]);
    
        // Get the current user's cart
        $cartModel = Cart::where('user_id', auth()->id())
                ->where('is_active', true)
                ->with('items.product')
                ->first();

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'metode_pengambilan' => 'required|string',
            'jenis_pembayaran' => 'required|string',
        ]);

        $cart = \App\Models\Cart::where('user_id', auth()->id())
            ->where('is_active', true)
            ->with('items')
            ->first();

        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang kosong.');
        }

        $totalHarga = $cart->items->sum(fn($item) => $item->price * $item->quantity);
        if ($validated['metode_pengambilan'] === 'antar') {
            $totalHarga += 10000;
        }

        $order = \App\Models\Order::create([
            'user_id' => auth()->id(),
            'cart_id' => $cart->id,
            'metode_pengambilan' => $validated['metode_pengambilan'],
            'jenis_pembayaran' => $validated['jenis_pembayaran'],
            'total_harga' => $totalHarga,
            'status' => 'pending',
        ]);

        $cart->update(['is_active' => false]);

        return redirect()->route('orders.show', $order->user_id)->with('success', 'Pesanan berhasil dibuat!');
    }

    public function show($user_id){

        // $data = Order::Where('id',$user_id)->get();
        $data = DB::table('orders')
            ->join('carts', 'orders.cart_id', '=', 'carts.id')
            ->join('cart_items', 'carts.id', '=', 'cart_items.cart_id')
            ->join('product', 'cart_items.code_product', '=', 'product.code_product')
            ->select(
                'product.code_product as code_product',
                'cart_items.name as Name',
                'cart_items.quantity as Quantity',
                DB::raw("CONCAT('Rp. ', FORMAT(cart_items.price, 0, 'id_ID')) as Price"),
                'orders.metode_pengambilan as Metode_Pengambilan',
                'orders.status as Status'
            )
            ->where('orders.user_id',$user_id)
            ->where('carts.is_active',false)
            ->get();

        return view('pesanan',compact('data'));
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
