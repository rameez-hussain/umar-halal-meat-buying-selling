<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int                  $id
 * @property float|null           $magna
 * @property float|null           $hikmat
 * @property float|null           $primer
 * @property float|null           $jaan
 * @property float|null           $adam
 * @property float|null           $miscellaneous
 * @property string|null          $invoice
 * @property CarbonImmutable|null $date
 * @property CarbonImmutable|null $created_at
 * @property CarbonImmutable|null $updated_at
 */

class Purchase extends Model
{
    public function casts(): array
    {
        return [
            'magna'         => 'float',
            'hikmat'        => 'float',
            'primer'        => 'float',
            'jaan'          => 'float',
            'adam'          => 'float',
            'miscellaneous' => 'float',
            'invoice'       => 'string',
            'date'          => 'immutable_datetime',
            'created_at'     => 'immutable_datetime',
            'updated_at'    => 'immutable_datetime',
        ];
    }
}
