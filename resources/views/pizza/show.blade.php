@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{$order->name}}</h1>
    <p class="type">Type - {{$order->type}}</p>
    <p class="toppings">Extra toppings: </p>
    <ul>
        @foreach($order->toppings as $topping)
            <li>{{$topping}}</li>
        @endforeach
    </ul>
    <form action="{{ route('pizza.destroy',$order->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Complete Order</button>
    </form>
</div>
<a href="/pizza/orders" class="back">Back to all orders</a>
@endsection