<?php

class Province extends Eloquent
{

    protected $guarded = array();

    public static $rules = array();

    public $table = 'provinces';

    public function priceReportsIbp()
    {
        return $this->hasMany('IBP');
    }

    public function getSetLinkAttribute()
    {
        return route('provinces.set', $this->id);
    }
}
