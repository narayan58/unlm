<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class AdminPosts extends Model {

    protected $table = 'tbl_posts';
    protected $guarded = ['id'];

    use HasSlug;

    public function getSlugOptions() : SlugOptions{
        return SlugOptions::create()
                ->generateSlugsFrom('title')
                ->saveSlugsTo('slug')
                ->doNotGenerateSlugsOnUpdate();
    }
    

    public function category(){
    	$data = $this->belongsToMany(AdminCategory::Class, 'rel_post_category', 'post_id', 'category_id');
    	return $data;
    }

    public static function deleteNewsCategoryList($id){
        $data = DB::table('rel_post_category')
                ->where('post_id', $id)
                ->delete();
        return $data;
    }

    public function tag(){
        $data = $this->belongsToMany(Tag::Class, 'rel_post_tag', 'post_id', 'tag_id');
        return $data;
    }

    public static function moduleUrl($table){
        $category=['tbl_posts' =>'detail','tbl_category' => 'category' , 'tbl_pages' => 'pages'];
        $data= DB::table($table)
                ->where('status','1')
                ->select('slug','title_en','title_np')
                ->get();
        return $data;
    }

   /* public static function getFilterDataSearch($title,$date){
        $query = DB::table('tbl_posts');
            if ($title !='') {
                $query->where('title_en','like', $title.'%');
            }
            if ($date !='') {
                $query->where('published_date', $date);
            }
            $data = $query->select('id','title_en','title_np','published_date','status')
                ->orderBy('published_date', 'desc')
                ->paginate(PAGES);
        return $data;
    }*/
}
