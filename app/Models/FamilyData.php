<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyData extends Model
{
    protected $dates = [
        'created_at', 'updated_at', 'birthday'
    ];
}