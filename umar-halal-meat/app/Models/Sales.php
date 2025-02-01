<?php

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                  $id
 * @property float|null           $cash
 * @property float|null           $card
 * @property CarbonImmutable|null $date
 * @property CarbonImmutable|null $created_at
 * @property CarbonImmutable|null $updated_at
 */

class Sales extends Model
{
    protected $guarded = [];

    public function casts(): array
    {
        return [
            'cash'       => 'float',
            'card'       => 'float',
            'date'       => 'immutable_datetime',
            'created_at'  => 'immutable_datetime',
            'updated_at' => 'immutable_datetime',
        ];
    }

    public static function getMonthlyTotals()
    {  
        return self::query()
            ->selectRaw('
                DATE_FORMAT(date, "%Y-%m") as month,
                SUM(cash) as cash_total,
                SUM(card) as card_total,
            ')
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();
    }
}
