<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseCreate;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::query()->get();
        
        return view('purchase.index', [
            'purchases' => $purchases
        ]);
    }

    public function create()
    {
        return view('purchase.create');
    }

    public function save(PurchaseCreate $request)
    {
        $purchase = $request->validate();
        dd($purchase);

        Purchase::query()->createOrFirst([$purchase]);

        return redirect()->route('purchase.index');
    }
}