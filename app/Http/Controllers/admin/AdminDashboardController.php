<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\AdminController;
use Illuminate\Http\Request;

class AdminDashboardController extends AdminController {

    public function dashboard(){
        $result = array(
            'page_header' => 'Dashboard'
        );
        return view('admin.home',$result);
    }

    public function mediaLibrary(){
    	$result = array(
            'page_header' => 'Media Library'
        );
        return view('admin.medialibrary', $result);
    }

}