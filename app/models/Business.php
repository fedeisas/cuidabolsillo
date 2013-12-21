<?php

class Business extends Eloquent
{

    protected $guarded = array();

    public static $rules = array();

    public $table = "businesses";

    public $appends = array('large_name');

    public function priceReports()
    {
        return $this->hasMany('PriceReport', 'business_id');
    }

    public function getLargeNameAttribute()
    {
        return join(', ', array($this->name, $this->location_address));
    }
}
