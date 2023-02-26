<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
// use App\Notifications\StudentResetPasswordNotification;


class Customer extends Authenticatable {
	
    // use Notifiable;
    protected $table = 'customers';
    protected $guard = 'customer';
    protected $guarded = ['id'];    
    

    use HasSlug;

    public function getSlugOptions() : SlugOptions{
        return SlugOptions::create()
         		->generateSlugsFrom('name')
        		->saveSlugsTo('slug')
        		->doNotGenerateSlugsOnUpdate();
    }

    public function cart(){
        return $this->hasMany('App\Model\admin\Cart');
    }
    public function favorite(){
        return $this->hasMany('App\Model\admin\Favorite');
    }
    public function checkout(){
        return $this->hasMany('App\Model\admin\Checkout');
    }
     //Send password reset notification
    /*public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudentResetPasswordNotification($token));
    }*/
    
}
