<?php

namespace App;

use App\Period;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];

    public function periods()
    {
    	return $this->hasMany(Period::class);
    }
}
