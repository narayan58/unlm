<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\admin\Product;
use App\Model\admin\ProductCategory;
use App\Model\admin\ProductSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductSubCategoryController extends Controller {

    private $title = 'Product Category';
    private $sort_by = 'created_at';
    private $sort_order = 'asc';
    private $index_link = 'product-sub-category.index';
    private $list_page = 'admin.product-sub-category.list';
    private $create_form = 'admin.product-sub-category.add';
    private $update_form = 'admin.product-sub-category.edit';
    private $link = 'product-sub-category';
    private $user_id;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $list = ProductSubCategory::orderBy($this->sort_by, $this->sort_order)->get();
        $productCategory=ProductCategory::where('status','1')->get();
        $result = array(
            'list'              => $list,
            'page_header'       => 'Add '.$this->title,
            'link'              => $this->link,
            'productCategory'   => $productCategory,
        );
        return view($this->list_page, $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect(route($this->index_link));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $crud = new ProductSubCategory;
        $crud->title = $request->title;
        $crud->product_category_id = $request->product_category_id;
        $crud->status = $request->status;

        $crud->image = $request->image;
        $crud->meta_title = $request->meta_title;
        $crud->meta_keywords = $request->meta_keywords;
        $crud->meta_description = $request->meta_description;

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
    public function edit($id)
    {
        $record = ProductSubCategory::findOrFail($id);
        $productCategory=ProductCategory::where('status','1')->get();
        $list = ProductSubCategory::orderBy($this->sort_by, $this->sort_order)->get();
        $result = array(
            'page_header'       => 'Edit '.$this->title.' Detail',
            'record'            => $record,
            'list'              => $list,
            'link'              => $this->link,
            'productCategory'   => $productCategory,
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'      => 'required',
            'product_category_id' =>'required',
            'slug'       => 'required',
        ]);
        $crud = ProductSubCategory::findOrFail($id);
        $crud->title = $request->title;
        $crud->status = $request->status;
        $crud->product_category_id = $request->product_category_id;
        $crud->image = $request->image;
        $crud->meta_title = $request->meta_title;
        $crud->meta_keywords = $request->meta_keywords;
        $crud->meta_description = $request->meta_description;
        
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
    public function destroy($id)
    {
        $crud = ProductSubCategory::findOrFail($id);
        $crud->delete();
        Session::flash('success_message', DELETED);
        return redirect(route($this->index_link));
    }
}