<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start_datetime',
        'end_datetime',
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function setStartDatetimeAttribute($value)
    {
        $this->attributes['start_datetime'] = Carbon::parse($value);
    }

    public function setEndDatetimeAttribute($value)
    {
        $this->attributes['end_datetime'] = Carbon::parse($value);
    }


}
