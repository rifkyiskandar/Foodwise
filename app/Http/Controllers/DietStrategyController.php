<?php

namespace App\Http\Controllers;

use App\Models\DietStrategy;
use Illuminate\Http\Request;

class DietStrategyController extends Controller
{
    public function index()
    {
        return DietStrategy::all();
    }

    public function show($id)
    {
        return DietStrategy::find($id);
    }

    public function store(Request $request)
    {
        return DietStrategy::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $dietStrategy = DietStrategy::find($id);
        $dietStrategy->update($request->all());
        return $dietStrategy;
    }

    public function delete($id)
    {
        return DietStrategy::destroy($id);
    }
}
