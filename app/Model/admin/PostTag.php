<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model {
	
    protected $table = 'rel_post_tag';
    protected $guarded = ['id'];   

    public function tag(){
        return $this->belongsTo('App\Model\admin\Tag','tag_id','id');
    } 

}
