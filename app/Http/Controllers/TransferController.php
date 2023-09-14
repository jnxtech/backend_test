<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index()
    {
        return Transfer::with(['sender', 'receiver', 'cryptocurrency'])->get();
    }

    public function show(Transfer $transfer)
    {
        return $transfer;
    }

    public function store(Request $request)
    {
        $transfer = Transfer::create($request->all());
        return response()->json($transfer, 201);
    }

    public function update(Request $request, Transfer $transfer)
    {
        $transfer->update($request->all());
        return response()->json($transfer, 200);
    }

    public function destroy(Transfer $transfer)
    {
        $transfer->delete();
        return response()->json(null, 204);
    }
}

