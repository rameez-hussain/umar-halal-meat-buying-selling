<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::query()->get();
        
        return view('sales.index', [
            'sales' => $sales
        ]);
    }
}
