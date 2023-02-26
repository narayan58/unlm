<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;
use App\Http\Middleware\CustomerMiddleware;
use App\Model\admin\Cart;
use App\Model\admin\Checkout;
use App\Model\admin\Customer;
use App\Model\admin\Favorite;
use App\Model\admin\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Model\admin\ProductOrderList;
use App\Model\admin\ProductOrder;
use Redirect;
use Session;
use Validator;

class CustomerController extends Controller
{
  
    public function __construct(){
       $this->middleware('customer');
    }

    public function dashboard()
    {
        $customer = Auth::guard('customer')->user();
        $orders   = ProductOrder::where('user_id',$customer->id)->get();
       return view('customer.dashboard',compact('customer','orders'));
    }


    public function profile($slug)
    {
        $customer = Auth::guard('customer')->user();
       return view('customer.profile',compact('customer'));
    }


    public function customerProfileUpdate(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required',
            'mobile'    => 'required',
            'address'   => 'required',
            'city'      => 'required',
        ]);
        if ($validator->passes()) {
                $id = Auth::guard('customer')->user()->id;
                $data = Customer::find($id);
                if ($data) {
                    $data->address = $request->address;
                    $data->city = $request->city;
                    $data->save();
                        $data = array(
                        'message' =>'Profile Changed Successfully!' ,
                        'status'  =>'true'
                        );
                    return response()->json($data);
                }
        }else{
            $data= array(
                'error' => true,
                'errors'=>$validator->errors()
                 );
            return response()->json($data);
        }
    }


     public function customerPasswordUpdate(Request $request)
        {
            $validator=Validator::make($request->all(), [
            'old' => 'required',
            'password' => 'required|confirmed|min:6',
            ]);
            if ($validator->passes()) {

                if (Hash::check($request->input('old'), Auth::guard('customer')->user()->password)) {
                    $id = Auth::guard('customer')->user()->id;
                    $data = Customer::find($id);
                    if ($data) {
                        $data->password= Hash::make($request->input('password'));
                        $data->save();
                            $data = array(
                            'message' =>'Password Changed Successfully!' ,
                            'status'  =>'true'
                            );
                        return response()->json($data);
                    }
                }else{

                     $data = array(
                            'message' =>'Old Password is incorrect!' ,
                            'status'  =>'true'
                            );
                        return response()->json($data);
                }
            }else{
                $data= array(
                    'error' => true,
                    'errors'=>$validator->errors()
                     );
                return response()->json($data);
            }
        }

        public function favorites()
        {
      	  $customer = Auth::guard('customer')->user();
      	  $favorites=Favorite::where('customer_id',$customer->id)->get();
      	  return view('customer.favorites',compact('customer','favorites'));
        }

        public function addToWishList(Request $request)
    {
        $customer=Customer::where('id',$request->customer_id)->first();
        $product=Product::where('id',$request->product_id)->first();
        $crud['customer_id']=$customer->id;
        $crud['product_id']=$product->id;
        $result=Favorite::create($crud);
        return response()->json($result);
    }

     public function wishListRemove(Request $request)
    {
        $favorite=Favorite::findOrFail($request->favorite_id);
        $favorite->delete();
        return response()->json($result);
    }

     public function cartRemove(Request $request)
    {
        $cart=Cart::findOrFail($request->cart_id);
        $cart->delete();
        return response()->json($result);
    }

    public function wishAdd(Request $request)
    {
        $data=Favorite::create($request->all());
        return response()->json($data);
    }

     public function cartAdd(Request $request)
    {
        $cart = Cart::where('product_id',$request->product_id)->where('customer_id',$request->customer_id)->first();
        if ($cart) {
        $cart->product_qty = $cart->product_qty+$request->product_qty;
        $cart->save();
        }else{
        $cart=Cart::create($request->all());
        }
        return response()->json($cart);
    }

    public function cartCheckout()
    {
        $customer = Auth::guard('customer')->user();
        $carts = Cart::where('customer_id',$customer->id)->where('status','0')->first();
        return view('frontend.checkout-product',compact('customer','carts'));
    }


    // public function cartCheckout()
    // {
    //     $customer = Auth::guard('customer')->user();
    //     $carts = Cart::where('customer_id',$customer->id)->where('status','0')->get();
    //     foreach ($carts as $key => $cart) {
    //         $crud=new Checkout;
    //         $crud->product_id=$cart->product_id;
    //         $crud->customer_id=$cart->customer_id;
    //         $crud->status='0';
    //         $crud->save();
    //     }
    //         foreach ($carts as $key => $cart) {
    //         $delete=Cart::findOrFail($cart->id);
    //         $delete->delete();
    //         }
    //     return view('customer.checkout');
    // }


    public function buyNow(Request $request,$slug)
    {
        dd($request->all());
        $customer = Auth::guard('customer')->user();
        $product = Product::where('slug',$slug)->first();
        return view('frontend.checkout-product',compact('customer','product'));
    }

    


}