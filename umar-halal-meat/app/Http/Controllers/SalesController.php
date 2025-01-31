<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseCreate;
use App\Http\Requests\SaleCreate;
use App\Models\Purchase;
use App\Models\Sales;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::query()
            ->get()
            ->collect()
            ->sortBy(fn ($sale) => $sale->date);

        return view('sales.index', [
            'sales' => $sales,
        ]);
    }

    public function create()
    {
        return view('sales.create');
    }

    public function save(SaleCreate $request)
    {
        $sale = $request->validated();

        Sales::query()->createOrFirst([
            'cash' => number_format(floatval($sale['cash']), 2, '.', ''),
            'card' => number_format(floatval($sale['card']), 2, '.', ''),
            'date' => date('Y-m-d', strtotime($sale['date'])),
        ]);

        return redirect()->route('sales.index');
    }
}