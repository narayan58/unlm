<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model {
	
    protected $table = 'tbl_checkout';
    protected $guarded = ['id'];

    public function customer(){
        return $this->belongsTo('App\Model\admin\Customer','customer_id','id');
    }

    public function product(){
        return $this->belongsTo('App\Model\admin\Product','product_id','id');
    }
}
