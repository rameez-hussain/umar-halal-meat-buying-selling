<?php

namespace App\Http\Controllers;

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
}