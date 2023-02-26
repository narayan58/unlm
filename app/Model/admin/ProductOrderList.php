<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class ProductOrderList extends Model {
    
    protected $table = 'tbl_product_order_list';
    protected $guarded = ['id'];

    public function product(){
        return $this->belongsTo('App\Model\admin\Product','product_id','id');
    } 
}
