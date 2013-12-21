<?php

class Product extends Eloquent
{

    protected $guarded = array();

    public static $rules = array();

    public $table = "products";

    public function priceReports()
    {
        return $this->hasMany('PriceReport');
    }

    public function lists()
    {
        return $this->belongsToMany('ProductList', 'list_product', 'product_id', 'list_id');
    }

    public function getHashAttribute()
    {
        return Hashids::encrypt($this->id);
    }

    public function getLinkAttribute()
    {
        return route('products.show', array($this->hash));
    }
}
