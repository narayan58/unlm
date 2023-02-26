<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Model\admin\Cart;
use App\Model\admin\Checkout;
use App\Model\admin\Favorite;
use App\Model\admin\Product;
use App\Model\admin\ProductCategory;
use App\Model\admin\ProductEnroll;
use App\Model\admin\ProductReview;
use App\Model\admin\ProductSs;
use App\Model\admin\ProductSubCategory;
use App\Model\admin\ProductViewTrack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends AdminController
{

    private $title = 'Product';
    private $sort_order = 'asc';
    private $index_link = 'product.index';
    private $list_page = 'admin.product.list';
    private $create_form = 'admin.product.add';
    private $update_form = 'admin.product.edit';
    private $link = 'product';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSubcategory($id)
    {
        $type = DB::table("tbl_product_sub_category")
        ->where("product_category_id",$id)
        ->distinct()
        ->pluck("id","title");
        return response()->json($type);
    }
        
    public function index()
    {
        $list=Product::get();
        $result=array(
            'list'       =>$list,
            'page_header'=>'List of '.$this->title,
            'link'       => $this->link,
        );
        return view($this->list_page,$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $productCategory=ProductCategory::where('status','1')->get();
        $result = array(
            'page_header'       => 'Create '.$this->title.' Detail',
            'link'              => $this->link,
            'productCategory'   =>$productCategory,
        );
        return view($this->create_form, $result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            'title'              => 'required',
            'description'        => 'required',
            'image'              => 'required',
            'new_price'          => 'required',
            'old_price'          => 'required',
            'short_info'          => 'required',
            'product_category_id'=> 'required',
        ]);
        $crud = new Product;
        $crud->title = $request->title;
        $crud->description = $request->description;
        $crud->short_info = $request->short_info;
        $crud->new_price = $request->new_price;
        $crud->old_price = $request->old_price;
        $crud->product_category_id = $request->product_category_id;
        $crud->status = $request->status;
        $crud->is_new = $request->is_new;
        $crud->is_popularity = $request->is_popularity;
        $crud->is_feature = $request->is_feature;
        $crud->product_sub_category_id = $request->product_sub_category_id;
        $crud->image = $request->image;
        $crud->save();
        Session::flash('success_message', CREATED);
        return redirect(route($this->index_link));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $pages = Product::findOrFail($id);
        $productCategory=ProductCategory::where('status','1')->get();
        $productSubCategory=ProductSubCategory::where('status','1')->get();
        $result = array(
            'page_header'       => 'Edit '.$this->title.' Detail',
            'record'            => $pages,
            'link'              => $this->link,
            'productCategory'   =>$productCategory,
            'productSubCategory'    => $productSubCategory,
        );
        return view($this->update_form, $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $this->validate($request, [
            'title'              => 'required',
            'description'        => 'required',
            'image'              => 'required',
            'new_price'          => 'required',
            'old_price'          => 'required',
            'short_info'          => 'required',
            'product_category_id'=> 'required',
        ]);

        $crud = Product::findOrFail($id);
        $crud->title = $request->title;
        $crud->description = $request->description;
        $crud->short_info = $request->short_info;
        $crud->new_price = $request->new_price;
        $crud->old_price = $request->old_price;
        $crud->status = $request->status;
        $crud->is_new = $request->is_new;
        $crud->is_popularity = $request->is_popularity;
        $crud->is_feature = $request->is_feature;
        
        // $crud->product_category_id = $request->product_category_id;
        // $crud->product_sub_category_id = $request->product_sub_category_id;
        $crud->image = $request->image;
        $crud->save();
        Session::flash('success_message', UPDATED);
        return redirect(route($this->index_link));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $crud = Product::findOrFail($id);
        $crud->delete();
        Session::flash('success_message', DELETED);
        return redirect(route($this->index_link));
    }

    public function enroll($slug)
    {
        $product=Product::where('slug',$slug)->first();
        if ($product) {
            $enroll=ProductEnroll::where('product_id',$product->id)->get();
            return view('admin.product.enroll-list',compact('enroll','product'));
        }
    }

    public function track($slug)
    {
        $product=Product::where('slug',$slug)->first();
        if ($product) {
            $track=ProductViewTrack::where('product_id',$product->id)->get();
            return view('admin.product.track-list',compact('track'));
        }
    }
    public function productReview($slug)
    {
        $product=Product::where('slug',$slug)->first();
        if ($product) {
            $review=ProductReview::where('product_id',$product->id)->get();
            return view('admin.product.review-list',compact('review','product'));
        }
    }

   

    public function approveReview($id)
    {
        $crud = ProductReview::findOrFail($id);
        $crud->status='1';
        $crud->save();
        Session::flash('success_message', 'Revie Approve successfully!');
        return back();
    }

    public function productCart($slug)
    {
        $product=Product::where('slug',$slug)->first();
        if ($product) {
            $cart=Cart::where('product_id',$product->id)->get();
            return view('admin.product.cart-list',compact('cart','product'));
        }
    }


    public function productWish($slug)
    {
        $product=Product::where('slug',$slug)->first();
        if ($product) {
            $wish=Favorite::where('product_id',$product->id)->get();
            return view('admin.product.wish-list',compact('wish','product'));
        }
    }

    public function productCheckOut($slug)
    {
        $product=Product::where('slug',$slug)->first();
        if ($product) {
            $checkout=Checkout::where('product_id',$product->id)->get();
            return view('admin.product.checkout-list',compact('checkout','product'));
        }
    }

    public function ListCheckout()
    {
        $checkout=Checkout::get();
        $page_header='Checkout List';
        return view('admin.product.all-checkout-list',compact('checkout','page_header'));
    }
    
    public function ListCart()
    {
        $cart=Cart::get();
        $page_header='Cart List';
        return view('admin.product.all-cart-list',compact('cart','page_header'));
    }
}
