<?php

namespace App\Http\Controllers;

use App\Models\UserFoodConsumption;
use Illuminate\Http\Request;

class UserFoodConsumptionFoodConsumptionController extends Controller
{
    public function index()
    {
        return UserFoodConsumption::all();
    }

    public function show($id)
    {
        return UserFoodConsumption::find($id);
    }

    public function store(Request $request)
    {
        return UserFoodConsumption::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $userFoodConsumption = UserFoodConsumption::find($id);
        $userFoodConsumption->update($request->all());
        return $userFoodConsumption;
    }

    public function delete($id)
    {
        return UserFoodConsumption::destroy($id);
    }
}
