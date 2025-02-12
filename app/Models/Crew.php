<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\CrewAttribute;

class Crew extends Model
{
    use CrewAttribute, SoftDeletes;

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];
}
