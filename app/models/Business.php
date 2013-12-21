<?php

class Business extends Eloquent
{

    protected $guarded = array();

    public static $rules = array();

    public $table = "businesses";

    public function priceReports()
    {
        return $this->hasMany('PriceReport', 'business_id');
    }
}
