<?php

namespace App\Models;

class Ticket extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'closed_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plaque()
    {
        return $this->belongsTo(Plaque::class);
    }
}
