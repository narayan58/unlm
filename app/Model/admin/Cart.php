<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {
	
    protected $table = 'tbl_product_cart';
    protected $guarded = ['id'];


    public function product(){
        return $this->belongsTo('App\Model\admin\Product','product_id','id');
    } 

    public function customer(){
        return $this->belongsTo('App\Model\admin\Customer','customer_id','id');
    }
}
