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

    public function rank(){
        return $this->belongsTo('App\Models\Rank');
    }

    public function background_check(){
        return $this->hasMany('App\Models\BackgroundCheck');
    }

    public function document(){
        return $this->hasMany('App\Models\Document');
    }

    public function educational_background(){
        return $this->hasMany('App\Models\EducationalBackground');
    }

    public function family_data(){
        return $this->hasMany('App\Models\FamilyData');
    }

    public function recent_vessel(){
        return $this->hasMany('App\Models\RecentVessel');
    }

    public function sea_service(){
        return $this->hasMany('App\Models\SeaService');
    }
}
