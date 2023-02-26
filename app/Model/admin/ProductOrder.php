<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model {
    
    protected $table = 'tbl_product_order';
    protected $guarded = ['id'];


    public function customer(){
        return $this->belongsTo('App\Model\admin\Customer','user_id','id');
    }
}
