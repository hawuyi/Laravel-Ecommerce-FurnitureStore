<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index()
    {
        $orders = Order::with('user')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.orders.index', ['orders' => $orders]);
    }

    public function view($id)
    {
        $states = ['pending', 'processing', 'shipped', 'cancelled'];
        $order = Order::with('user', 'items', 'items.product', 'items.color')->findOrFail($id);
        return view('admin.pages.orders.view', ['order' => $order, 'states' => $states]);
    }

    public function updateStatus($id, Request $request)
    {

        // $order = Order::findOrFail($id);
        // $order->update(['status' => $request->status]);
        // return back()->with('success', 'Status Updated!');

        Order::findOrFail($id)->update(['status' => $request->status]);
        return back()->with('success', 'Status Updated!');
    }
}
