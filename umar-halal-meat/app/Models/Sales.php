<?php

namespace App\Models;

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
}
