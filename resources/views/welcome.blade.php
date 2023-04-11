@extends('layouts.app')

@section('content')
<div class="pizza-main-container flex items-top justify-center items-center">
    <div class="container text-center">
        <img src="/img/pizza_house.png" alt="pizza house logo">
        <div class="title m-b-md">
            Best pizza in country
        </div>
        <p class="message">{{session('msg')}}</p>
        <div class="pizza-list">
            <h2>All Pizzas:</h2>
            <ol>
                @foreach ($pizzas as $pizza)
                    <li>{{ $pizza->name }} - {{ $pizza->price }}€ <a href="/pizza/{{$pizza->id}}" class="details">Details</a></li></li>
                @endforeach
            </ol>
        </div>
        <button type="button" onclick="location.href='{{route('pizza.create')}}'">Order a Pizza</button>
    </div>
</div>
@endsection