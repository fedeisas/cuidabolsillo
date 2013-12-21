<?php

class IBP extends Eloquent
{

    protected $guarded = array();

    public static $rules = array();

    public $table = "ibp";

    public function getDates()
    {
        return array('reported_at', 'created_at', 'updated_at');
    }

    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function province()
    {
        return $this->belongsTo('Province');
    }
}
