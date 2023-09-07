<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function submitCheckout(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|max:255',
        ]);

        //Store the order
        $order = Order::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'status' => 'pending',
            'total' => Cart::totalAmount()
        ]);

        foreach(session()->get('cart') as $item)
        {
            $order->items()->create([
                'product_id' => $item['product']['id'],
                'color_id' => $item['color']['id'],
                'quantity' => $item['quantity'],
            ]);
        }

        session()->forget('cart');

        

        return view('pages.orderSuccess', ['order' =>$order]);


    }
    
       
}