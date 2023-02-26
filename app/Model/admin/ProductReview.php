<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model {
    
    protected $table = 'tbl_product_review';
    protected $guarded = ['id'];    
}
