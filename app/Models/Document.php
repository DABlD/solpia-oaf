<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $dates = [
        'created_at', 'updated_at', 'issued_date', 'expiry_date'
    ];
}
