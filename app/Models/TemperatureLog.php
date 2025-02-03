<?php

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                  $id
 * @property float                $temperature
 * @property string               $unit
 * @property string               $done_by
 * @property CarbonImmutable|null $created_at
 * @property CarbonImmutable|null $updated_at
 */

class TemperatureLog extends Model
{
    protected $guarded = [];

    public function casts(): array
    {
        return [
            'temperature'   => 'float',
            'unit'          => 'string',
            'done_by'       => 'string',
            'created_at'    => 'immutable_datetime',
            'updated_at'    => 'immutable_datetime',
        ];
    }
}
