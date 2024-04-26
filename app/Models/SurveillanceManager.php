<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveillanceManager extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'surveillance_enabled_at',
        'surveillance_disabled_at',
        'access_blocked_at',
        'access_unblocked_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'surveillance_enabled_at' => 'datetime',
        'surveillance_disabled_at' => 'datetime',
        'access_blocked_at' => 'datetime',
        'access_unblocked_at' => 'datetime',
    ];
}
