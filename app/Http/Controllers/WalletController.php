<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        return Wallet::all();
    }

    public function show(Wallet $wallet)
    {
        return $wallet;
    }

    public function store(Request $request)
    {
        $wallet = Wallet::create($request->all());
        return response()->json($wallet, 201);
    }

    public function update(Request $request, Wallet $wallet)
    {
        $wallet->update($request->all());
        return response()->json($wallet, 200);
    }

    public function destroy(Wallet $wallet)
    {
        $wallet->delete();
        return response()->json(null, 204);
    }
}

