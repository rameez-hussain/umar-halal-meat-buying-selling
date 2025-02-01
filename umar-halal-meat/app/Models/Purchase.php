<?php

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                  $id
 * @property float|null           $magna
 * @property float|null           $hikmat
 * @property float|null           $primer
 * @property float|null           $jaan
 * @property float|null           $adam
 * @property float|null           $millat
 * @property float|null           $eggs
 * @property float|null           $miscellaneous
 * @property string|null          $invoice
 * @property CarbonImmutable|null $date
 * @property CarbonImmutable|null $created_at
 * @property CarbonImmutable|null $updated_at
 */

class Purchase extends Model
{
    protected $guarded = [];

    public function casts(): array
    {
        return [
            'magna'         => 'float',
            'hikmat'        => 'float',
            'primer'        => 'float',
            'jaan'          => 'float',
            'adam'          => 'float',
            'millat'        => 'float',
            'eggs'          => 'float',
            'miscellaneous' => 'float',
            'invoice'       => 'string',
            'date'          => 'immutable_datetime',
            'created_at'    => 'immutable_datetime',
            'updated_at'    => 'immutable_datetime',
        ];
    }

    public static function getMonthlyTotals()
    {
    return self::query()
        ->selectRaw('
            DATE_FORMAT(date, "%Y-%m") as month,
            SUM(magna) as magna_total,
            SUM(hikmat) as hikmat_total,
            SUM(primer) as primer_total,
            SUM(jaan) as jaan_total,
            SUM(adam) as adam_total,
            SUM(millat) as millat_total,
            SUM(eggs) as eggs_total,
            SUM(miscellaneous) as miscellaneous_total
        ')
        ->groupBy('month')
        ->orderBy('month', 'asc')
        ->get();
    }
}
