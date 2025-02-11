<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeaService extends Model
{
    protected $dates = [
        'created_at', 'updated_at', 'sign_on', 'sign_off'
    ];
}
