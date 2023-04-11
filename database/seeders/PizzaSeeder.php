<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Pizza;
class PizzaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pizza::create([
            'name' => 'Pepperoni',
            'type' => 'Classic',
            'base' => 'Thin',
            'price' => 12.99,
            'toppings' => json_encode(['Tomato sauce', 'Mozzarella cheese', 'Pepperoni']),
            'description' => 'The classic pizza with tomato sauce, mozzarella cheese, and spicy pepperoni.'
        ]);
        
        Pizza::create([
            'name' => 'Hawaiian',
            'type' => 'Classic',
            'base' => 'Thin',
            'price' => 11.99,
            'toppings' => json_encode(['Tomato sauce', 'Mozzarella cheese', 'Ham', 'Pineapple']),
            'description' => 'The tropical pizza with tomato sauce, mozzarella cheese, ham, and pineapple.'
        ]);
        
        Pizza::create([
            'name' => 'Meat Lovers',
            'type' => 'Classic',
            'base' => 'Thin',
            'price' => 14.99,
            'toppings' => json_encode(['Tomato sauce', 'Mozzarella cheese', 'Pepperoni', 'Sausage', 'Bacon']),
            'description' => 'The pizza for meat lovers with tomato sauce, mozzarella cheese, pepperoni, sausage, and bacon.'
        ]);
        
        Pizza::create([
            'name' => 'Veggie Delight',
            'type' => 'Vegetarian',
            'base' => 'Thin',
            'price' => 12.99,
            'toppings' => json_encode(['Tomato sauce', 'Mozzarella cheese', 'Mushrooms', 'Green peppers', 'Onions']),
            'description' => 'The vegetarian pizza with tomato sauce, mozzarella cheese, mushrooms, green peppers, and onions.'
        ]);
        
    }
}
