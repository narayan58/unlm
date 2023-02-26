<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\AdminController;
use App\Model\admin\Customer;
use App\Model\admin\AdminRoleAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CustomerController extends AdminController {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$customers=Customer::get();
    	$page_header='List of customers';
    	return view('admin.customer.list',compact('customers','page_header'));
    }

    public function customerDelete($id)
    {
        $crud = Customer::findOrFail($id);
        $crud->delete();
        Session::flash('success_message', DELETED);
        return back();
    }
}