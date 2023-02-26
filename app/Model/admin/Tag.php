<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tag extends Model {
	
    protected $table = 'tbl_tag';
    protected $guarded = ['id'];    

    use HasSlug;

    public function getSlugOptions() : SlugOptions{
        return SlugOptions::create()
         		->generateSlugsFrom('name')
        		->saveSlugsTo('slug')
        		->doNotGenerateSlugsOnUpdate();
    }

   	public function posts(){
   		return $this->belongsToMany(AdminPosts::Class, 'rel_post_tag', 'tag_id', 'post_id');
    }
    public function postTag(){
        return $this->hasMany('App\Model\admin\PostTag');
    }
}
