<?php

namespace App\Http\Controllers;

use App\Models\Cryptocurrency;
use Illuminate\Http\Request;

class CryptocurrencyController extends Controller
{
    public function index()
    {
        return Cryptocurrency::all();
    }

    public function show(Cryptocurrency $cryptocurrency)
    {
        return $cryptocurrency;
    }

    public function store(Request $request)
    {
        $cryptocurrency = Cryptocurrency::create($request->all());
        return response()->json($cryptocurrency, 201);
    }

    public function update(Request $request, Cryptocurrency $cryptocurrency)
    {
        $cryptocurrency->update($request->all());
        return response()->json($cryptocurrency, 200);
    }

    public function destroy(Cryptocurrency $cryptocurrency)
    {
        $cryptocurrency->delete();
        return response()->json(null, 204);
    }
}

