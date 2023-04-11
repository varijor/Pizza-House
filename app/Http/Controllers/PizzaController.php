<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function homepage() {
        $pizzas = Pizza::all();

        return view('welcome', [
            'pizzas' => $pizzas
        ]);
    }

    public function details($id) {
        $pizza = Pizza::findOrFail($id);

        return view('details.details', ['pizza' => $pizza]);
    }

    public function index() {
        /*
        $pizzas = Pizza::all();
        
        $pizzas = Pizza::orderBy('name','desc')->get();
        $pizzas = Pizza::where('type','hawaii')->get();
        */
        $pizzas = Pizza::latest()->get();

        return view('pizza.index', [
            'pizzas' => $pizzas
        ]);
    }

    public function create(){
        $pizzas = Pizza::all();

        return view('pizza.create', [
            'pizzas' => $pizzas
        ]);
     }

}
