<?php

class ProductList extends Eloquent
{

    protected $guarded = array();

    public static $rules = array();

    public $table = "lists";

    public function products()
    {
        return $this->belongsToMany('Product', 'list_product', 'list_id', 'product_id')->orderBy('name', 'desc');
    }
}
