@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>
        Order a Pizza
    </h1>
    <form action="/pizza" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select id="type" name="type">
        @foreach($pizzas as $pizza)
            <option value="{{ $pizza->name }}" data-price="{{ $pizza->price }}">{{ $pizza->name }}</option>
        @endforeach
        </select>
        <fieldset>
            <label>Extra toppings:</label><br>
            <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms
            <input type="checkbox" name="toppings[]" value="Ham">Ham 
            <input type="checkbox" name="toppings[]" value="Olives">Olives
            <input type="checkbox" name="toppings[]" value="Corn">Corn <br>
        </fieldset>
        <input type="hidden" name="price" id="price">
        <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection