<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseCreate;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->input('year', now()->year);
        $month = $request->input('month', now()->format('m'));

        $purchases = Purchase::query()
            ->whereYear('date', $year)
            ->whereMonth('date', $month)
            ->orderBy('date')
            ->get();

        $monthlyTotals = [
            'magna' => $purchases->sum('magna'),
            'hikmat' => $purchases->sum('hikmat'),
            'primer' => $purchases->sum('primer'),
            'jaan' => $purchases->sum('jaan'),
            'adam' => $purchases->sum('adam'),
            'millat' => $purchases->sum('millat'),
            'eggs' => $purchases->sum('eggs'),
            'miscellaneous' => $purchases->sum('miscellaneous'),
        ];

        $monthlyTotals['grand'] = array_sum($monthlyTotals);

        $availableYears = Purchase::selectRaw('YEAR(date) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('purchase.index', [
            'purchases' => $purchases,
            'selectedYear' => $year,
            'selectedMonth' => $month,
            'availableYears' => $availableYears,
            'monthlyTotals' => $monthlyTotals,
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
            'millat'        => number_format(floatval($purchase['millat']), 2, '.', ''),
            'eggs'          => number_format(floatval($purchase['eggs']), 2, '.', ''),
            'miscellaneous' => number_format(floatval($purchase['miscellaneous']), 2, '.', ''),
            'date'          => date('Y-m-d', strtotime($purchase['date'])),
        ]);

        return redirect()->route('purchases.index');
    }
}