<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        return view('hitungkalori');
    }

    public function show($id)
    {
        return Food::find($id);
    }

    public function store(Request $request)
    {
        return Food::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $food = Food::find($id);
        $food->update($request->all());
        return $food;
    }

    public function delete($id)
    {
        return Food::destroy($id);
    }

    public function calculateCalories(Request $request)
    {
        $foods = $request->input('foods');
        $totalCarbohydrates = 0;
        $totalProtein = 0;
        $totalFat = 0;
        $totalCalories = 0;

        foreach ($foods as $foodInput) {
            $food = Food::where('name', $foodInput['name'])->first();
            if ($food) {
                $qty = $foodInput['qty'];
                $totalCarbohydrates += $food->carbohydrates * $qty;
                $totalProtein += $food->protein * $qty;
                $totalFat += $food->fat * $qty;
            }
        }

        $totalCalories = ($totalFat * 9) + ($totalProtein * 4) + ($totalCarbohydrates * 4);

        return view('output', [
            'totalCarbohydrates' => $totalCarbohydrates,
            'totalProtein' => $totalProtein,
            'totalFat' => $totalFat,
            'totalCalories' => $totalCalories,
        ]);
    }
}
