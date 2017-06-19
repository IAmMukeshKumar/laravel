<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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




}
