<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleCreate;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->input('year', now()->year);
        $month = $request->input('month', now()->format('m'));

        $sales = Sales::query()
            ->whereYear('date', $year)
            ->whereMonth('date', $month)
            ->orderBy('date')
            ->get();

        $monthlyTotals = [
            'cash' => $sales->sum('cash'),
            'card' => $sales->sum('card'),
        ];

        $monthlyTotals['grand'] = array_sum($monthlyTotals);

        $availableYears = Sales::selectRaw('YEAR(date) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('sales.index', [
            'sales' => $sales,
            'selectedYear' => $year,
            'selectedMonth' => $month,
            'availableYears' => $availableYears,
            'monthlyTotals' => $monthlyTotals,
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