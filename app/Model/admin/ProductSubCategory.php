<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ProductSubCategory extends Model {
	
    protected $table = 'tbl_product_sub_category';
    protected $guarded = ['id'];    

    use HasSlug;

    public function getSlugOptions() : SlugOptions{
        return SlugOptions::create()
         		->generateSlugsFrom('title')
        		->saveSlugsTo('slug')
        		->doNotGenerateSlugsOnUpdate();
    }

 public function productCategory(){
        return $this->belongsTo('App\Model\admin\ProductCategory','product_category_id','id');
    } 
    
}
