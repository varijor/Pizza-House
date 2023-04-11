@extends('layouts.app')

@section('content')
<div class="details-main-container flex items-top justify-center items-center">
    <div class="flex">
        <div>
            <h1>{{$pizza->name}}</h1>
            <h2>Type - {{$pizza->type}}</h2>
            <h2>Base - {{$pizza->base}}</h2>
            <h2>Price - {{$pizza->price}}€</h2>
            <h2>Toppings:</h2>
            <ul>
                @foreach(json_decode($pizza->toppings) as $topping)
                    <li>{{$topping}}</li>
                @endforeach
            </ul>
            <p>{{$pizza->description}}</p>
            <button type="button" onclick="location.href='/'">Back</button>
        </div>
        <div>
            <img src="/img/pizza-icon.png" alt="">
        </div>
    </div>
</div>
@endsection