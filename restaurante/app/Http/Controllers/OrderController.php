<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $orders = Order::all();  //returna todos los pedidos de un restaurante
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()   //plantilla de añadir un nuevo pedido
    {return view('orders.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'ordername' =>'required',
            'customerno'=> 'required', //almcena los datos del pedido
            'quantity'=>'required|integer|min:1|max:120',
            'total'=>'required|numeric',
            'status'=>'required',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update($request->only(['customerno', 'ordername', 'quantity', 'total', 'status']));
        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
            return redirect()->route('order.index')->with('success', 'Order deleted successfully!');
    }
}
