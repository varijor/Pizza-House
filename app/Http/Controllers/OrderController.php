<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::latest()->get();

        return view('pizza.index', [
            'orders' => $orders
        ]);
    }
    public function show($id){
        //use the $id variable to query the db for a record
        $order = Order::findOrFail($id);
        return view('pizza.show', [
            'order' => $order
        ]);
    }

    public function destroy($id){
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect('/pizza/orders');
    }
 
     public function store(){
         //error_log(); //print
         //request('name'); // ako $_POST['name']
 
         $order = new Order();
         $order->name = request('name');
         $order->type = request('type');
         $order->total = request('price');
         $order->toppings = request('toppings');
         error_log($order);
         $order->save();
         return redirect("/")->with('msg','Thanks for your order!');
     }
}
