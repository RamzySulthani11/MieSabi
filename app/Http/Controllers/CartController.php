<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::firstOrCreate(['user_id' => auth()->id(),'is_active' => true]);
        $items = $cart->items()->get();

        return view('keranjang', compact('items'));
    }

    public function add(Request $request)
    {

        $userId = auth()->id();

        // ✅ Get or create active cart only
        $cart = Cart::firstOrCreate(['user_id' => $userId, 'is_active' => true]);

        $prod = $request->only(['code_product', 'name', 'price']);

        // 🔒 Safety: get product info from database if needed
        if (empty($prod['name']) || empty($prod['price'])) {
            $dbProduct = Product::where('code_product', $prod['code_product'])->first();
            if ($dbProduct) {
                $prod['name'] = $dbProduct->name;
                $prod['price'] = $dbProduct->price;
            }
            echo var_dump($dbProduct);
        }
        $item = $cart->items()->where('code_product', $prod['code_product'])->first();
        
        if ($item) {
            // dd($item);
            $item->increment('quantity');
        } else {
            // dd($cart->items);
            $cart->items()->create([
                'code_product' => $prod['code_product'],
                'name' => $prod['name'],
                'price' => $prod['price'],
                'quantity' => 1,
                'variants' => [
                    'Original' => 0,
                    'Yamin' => 0,
                    'Chili Oil' => 0,
                ],
            ]);
        }

        return redirect()->back()->with('success', 'Produk ditambahkan ke keranjang!');
    }

    public function update(Request $request, $code_product)
    {
        $cart = Cart::where('user_id', auth()->id())
                ->where('is_active', true)
                ->first();

        if ($cart) {
            $item = $cart->items()->where('code_product', $code_product)->first();

            if ($item) {
                $quantity = max(1, (int) $request->quantity);

                $item->update([
                    'quantity' => $quantity,
                    'variants' => $request->has('variants')
                        ? json_decode($request->variants, true)
                        : $item->variants,
                ]);
            }
        }

        return redirect()->route('keranjang.index')->with('success', 'Keranjang diperbarui');
    }

    public function remove($code_product)
    {
        $cart = Cart::where('user_id', auth()->id())
                ->where('is_active', true)
                ->first();

        if (!$cart) {
            dd('Cart tidak ditemukan untuk user_id: ' . auth()->id());
        }

        if ($cart) {
            $cart->items()->where('code_product', $code_product)->delete();
        }

        return redirect()->route('keranjang.index')->with('success', 'Produk dihapus dari keranjang');
    }

    public function updateVariant(Request $request, $code_product)
{
    $cart = Cart::where('user_id', auth()->id())
                ->where('is_active', true)
                ->first();

    if (!$cart) {
        return response()->json(['error' => 'Cart not found'], 404);
    }

    $item = $cart->items()->where('code_product', $code_product)->first();

    if (!$item) {
        return response()->json(['error' => 'Item not found'], 404);
    }

    $item->update([
        'variants' => $request->variants, // expects array
    ]);

    return response()->json(['success' => true]);
}
    public function rincian(Request $request)
    {
        $pickupMethod = $request->input('pickup_method', 'gerai');
        session(['pickup_method' => $pickupMethod]);

        return redirect()->route('rincian');
    }

}
