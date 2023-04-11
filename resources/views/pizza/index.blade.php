@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    <!-- @for ($i = 0; $i < count($orders); $i++)
    <p>{{$orders[$i]['type']}}</p>
    @endfor -->

    @foreach($orders as $order)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="pizza icon">
            <h4><a href="/pizza/orders/{{$order->id}}">{{$order->name}}</a></h4>
        </div>
    @endforeach
</div>
@endsection