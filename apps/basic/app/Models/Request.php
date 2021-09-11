<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'afm',
        'status',
        'fee_id'
    ];
}