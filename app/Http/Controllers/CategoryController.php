<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodBeverage()
    {
        return view('category', [
            'category' => 'Category: Food & Beverage',
            'products' => [
                ['name' => 'Milk', 'price' => 10000],
                ['name' => 'Bread', 'price' => 5000],
                ['name' => 'Egg', 'price' => 2000],
            ],
        ]);
    }

    public function beautyHealth()
    {
        return view('category', [
            'category' => 'Category: Beauty & Health',
            'products' => [
                ['name' => 'Shampoo', 'price' => 20000],
                ['name' => 'Soap', 'price' => 5000],
                ['name' => 'Toothpaste', 'price' => 10000],
            ],
        ]);
    }

    public function homeCare()
    {
        return view('category', [
            'category' => 'Category: Home Care',
            'products' => [
                ['name' => 'Detergent', 'price' => 30000],
                ['name' => 'Floor Cleaner', 'price' => 25000],
                ['name' => 'Toilet Cleaner', 'price' => 15000],
            ],
        ]);
    }

    public function babyKid()
    {
        return view('category', [
            'category' => 'Category: Baby & Kid',
            'products' => [
                ['name' => 'Diaper', 'price' => 50000],
                ['name' => 'Baby Wipes', 'price' => 20000],
                ['name' => 'Baby Powder', 'price' => 10000],
            ],
        ]);
    }
}
