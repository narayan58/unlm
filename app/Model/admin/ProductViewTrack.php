<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductViewTrack extends Model {

    protected $table = 'tbl_product_view_track';
    protected $guarded = ['id'];

}
