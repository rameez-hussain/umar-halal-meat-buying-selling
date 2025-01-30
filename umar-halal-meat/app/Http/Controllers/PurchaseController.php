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
            'purchases' => $purchases,
        ]);
    }

    public function create()
    {
        return view('purchase.create');
    }

    public function save(PurchaseCreate $request)
    {
        $purchase = $request->validated();

        Purchase::query()->createOrFirst([
            'magna'         => number_format(floatval($purchase['magna']), 2, '.', ''),
            'hikmat'        => number_format(floatval($purchase['hikmat']), 2, '.', ''),
            'primer'        => number_format(floatval($purchase['primer']), 2, '.', ''),
            'jaan'          => number_format(floatval($purchase['jaan']), 2, '.', ''),
            'adam'          => number_format(floatval($purchase['adam']), 2, '.', ''),
            'miscellaneous' => number_format(floatval($purchase['miscellaneous']), 2, '.', ''),
            'date'          => date('Y-m-d', strtotime($purchase['date'])),
        ]);

        return redirect()->route('purchases.index');
    }
}