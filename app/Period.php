<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
	CONST MAX = 2000;

    protected $guarded = [];

    public function scopeAvailableOn($builder, $value)
    {
    	return $builder->where('name', $value)->count() < self::MAX;
    }

    public function scopeAvailableTodayOn($builder, $value)
    {
    	return $builder->whereDate('created_at', today())->where('name', $value)->count() < self::MAX;
    }

}
