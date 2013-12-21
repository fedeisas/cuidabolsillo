<?php

class PriceReport extends Eloquent
{

    protected $guarded = array();

    public static $rules = array(
        'product_id' => 'required|numeric|exists:products,id',
        'price' => 'required|numeric'
    );

    public $appends = array('hash');

    public $table = "price_reports";

    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function business()
    {
        return $this->belongsTo('Business', 'business_id');
    }

    public function province()
    {
        return $this->belongsTo('Province', 'province_id');
    }

    public function getHashAttribute()
    {
        return Hashids::encrypt($this->id);
    }
}
