<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model {
	
    protected $table = 'tbl_product';
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

    public function productSubCategory(){
        return $this->belongsTo('App\Model\admin\ProductSubCategory','product_sub_category_id','id');
    } 

    // public function favorite(){
    //     return $this->hasMany('App\Model\admin\Favorite');
    // }

    // public function cart(){
    //     return $this->hasMany('App\Model\admin\Cart');
    // }
    //  public function checkout(){
    //     return $this->hasMany('App\Model\admin\Checkout');
    //}
}
