<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Model\admin\AdminCategory;
use App\Model\admin\AdminContact;
use App\Model\admin\AdminFaq;
use App\Model\admin\AdminPages;
use App\Model\admin\AdminPosts;
use App\Model\admin\AdminSlider;
use App\Model\admin\AdminVideo;
use App\Model\admin\Album;
use App\Model\admin\Feature;
use App\Model\admin\Gallery;
use App\Model\admin\InsuranceType;
use App\Model\admin\NewsLetterSubscription;
use App\Model\admin\Offer;
use App\Model\admin\PostTag;
use App\Model\admin\Product;
use App\Model\admin\ProductCategory;
use App\Model\admin\ProductEnroll;
use App\Model\admin\ProductImage;
use App\Model\admin\ProductOrder;
use App\Model\admin\ProductOrderList;
use App\Model\admin\ProductReview;
use App\Model\admin\ProductSs;
use App\Model\admin\ProductSubCategory;
use App\Model\admin\ProductViewTrack;
use App\Model\admin\QuoteRequest;
use App\Model\admin\Service;
use App\Model\admin\ServiceEnroll;
use App\Model\admin\Team;
use App\Model\admin\Testimonial;
use App\Model\admin\VehicleType;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Mail;
use Validator;


class FrontendController extends Controller
{


  public function encrypt()
   {
        $encrypted = Crypt::encryptString('Narayan');
        print_r($encrypted);
   }

   public function decrypt()
    {
         $decrypt= Crypt::decryptString('eyJpdiI6Im56WHI2UWVEYkx6QStZdk9JczhZaVE9PSIsInZhbHVlIjoiUVM1eW9VNTFGSmZ4cWFhMStnUmJkdz09IiwibWFjIjoiMjllMjNjN2FkM2E2OGE0OWE0MmJiZmNkYWVkMDdkNWM1NDdmMTY0ODM4ZTVmY2FmZDA2ZTJjODc1YjQzZTY0NyJ9');
         print_r($decrypt);
    }
    public function order()
    {
        return view('frontend.order');
    }

    public function profile()
    {
        return view('frontend.profile');
    }

        public function dashboard()
    {
        return view('frontend.dashboard');
    }
     public function productCategory($catSlug)
    {
        $productCategory=ProductCategory::where('slug',$catSlug)->first();
        $allProductCategory=ProductCategory::get();
        if (!empty($productCategory)) {
            $products=Product::where('product_category_id',$productCategory->id)->paginate(20);
        return view('frontend.product-category',compact('productCategory','products','allProductCategory'));
        }else{
            return view('frontend.404');
        }
    }


     public function productSubCategory($catSlug,$subCatSlug)
    {
        $productCategory=ProductSubCategory::where('slug',$subCatSlug)->first();
        $allProductCategory=ProductCategory::get();
        if (!empty($productCategory)) {
            $products=Product::where('product_sub_category_id',$productCategory->id)->paginate(20);
        return view('frontend.product-sub-category',compact('productCategory','products','allProductCategory','catSlug'));
        }else{
            return view('frontend.404');
        }
    }

	public function cartList()
	{
		return view('frontend.cart');
	}



    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function shop(Request $request)
    {
        if($request->sort=='price_desc'){
            $products=Product::where('status',1)
                      ->orderBy('new_price','desc')
                      ->paginate(20);
        }elseif($request->sort=='price_asc'){
            $products=Product::where('status',1)
                      ->orderBy('new_price','asc')
                      ->paginate(20);
        }elseif($request->sort=='newest'){
            $products=Product::where('status',1)
                      ->orderBy('created_at','desc')
                      ->paginate(20);
        }elseif($request->sort=='popularity'){
            $products=Product::where('status',1)
                      ->where('is_popularity',1)
                      ->paginate(20);
        }else{
        $products=Product::where('status',1)->paginate(20);
        }
        $productCategory=ProductCategory::where('status','1')->get();
        return view('frontend.shop',compact('products','productCategory'));
    }


    public function productSearch(Request $request)
    {
         $title= $request->product;
         $productCategory=ProductCategory::where('status','1')->get();
         $products=Product::where('status','=','1')
                   ->where(function($query) use ($title){
                    $query->where('title', 'LIKE', '%'.$title.'%');
                    $query->orWhere('description', 'LIKE', '%'.$title.'%');
                    $query->orWhere('short_info', 'LIKE', '%'.$title.'%');
                })
                ->select('tbl_product.*')
                ->paginate(20);
        return view('frontend.search-list',compact('products','title','productCategory'));
    }




    public function index()
    {
        $categoryResource=AdminCategory::where('slug','blog')->first();
        $blogs=$categoryResource->posts;

        $sliders=AdminSlider::where('status',1)->get();
        $products=Product::where('status',1)->get();
        $productCategory = ProductCategory::with('product')->get();

        // $productSubCategory = ProductSubCategory::get();

        return view('frontend.index',compact('blogs','products','productCategory','sliders'));
    }
    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "title" => $product->title,
                        "slug" => $product->slug,
                        "quantity" => 1,
                        "price" => $product->new_price,
                        "image" => asset($product->image)
                    ]
            ];

            session()->put('cart', $cart);

/*        return redirect()->back()->with('message','Product added to cart successfully!');
*/        return redirect(route('cartList'))->with('message', 'Product added to cart successfully!');
        
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

/*            return redirect()->back()->with('message', 'Product added to cart successfully!');
*/        return redirect(route('cartList'))->with('message', 'Product added to cart successfully!');


        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "title" => $product->title,
            "slug" => $product->slug,
            "quantity" => 1,
            "price" => $product->new_price,
            "image" => asset($product->image)
        ];

        session()->put('cart', $cart);

        // return redirect()->back();
        return redirect(route('cartList'))->with('message', 'Product added to cart successfully!');

    }



    public function cartUpdate(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('message', 'Product updated to cart successfully!');
        }
    }
    public function cartRemove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('message', 'Product removed to cart successfully!');
        }
    }

    public function finalOrder(Request $request){
            $this->validate($request, [
                'name'           => 'required',
            ]);
            $cartlist = session()->get('cart');
            if (count($cartlist) > 0) {
                $order = new ProductOrder;
                $order->order_code = 'BM-'.date('y').'-'.date('n').'-'.date('j').'-'.time();
                $order->status = 0; 
                $order->order_status = 0; 
                $order->order_datetime = date('Y-m-d H:i:s');
                $order->payment_id = $request->payment_id;
                $order->payment_status = 0;
                $order->sub_total_price = $request->sub_total_price;
                $order->shipping_cost = $request->shipping_charge;
                $order->final_price = $request->final_total;

                $order->name = $request->name;
                $order->email = $request->email;
                $order->phone = $request->phone;
                $order->message = $request->message;
                if ($request->customer_id) {
                $order->is_guest = 0;
                $order->user_id = $request->customer_id;
                }else{
                $order->is_guest = 1;
                }

                $order->save();

                if ($order) {
                    foreach ($cartlist as $key => $cart) {
                            $product=Product::where('id',$key)->first();
                            $data = new ProductOrderList;
                            $data->order_code_id = $order->id;
                            $data->product_id = $product->id;
                            $data->product_qty = $cart['quantity'];
                            $itemamt=$cart['quantity']*$product->new_price;
                            $data->price = $itemamt;
                            $data->save();
                    }
                            session()->forget('cart');


            // return redirect()->back()->with('message', 'Product order successfully!');
            return redirect(route('confirmOrder',$order->order_code));
                }
            }else{
                return view('frontend.404');
            }
    }

    public function confirmOrder($orderCode)
    {
        $order=ProductOrder::where('order_code',$orderCode)->first();
        if ($order) {
        return view ('frontend.confirm-order',compact('order'));
        }else{
                return view('frontend.404');
        }
    }





    

    public function privacyPolicy()
    {
        $privacy=AdminPages::where('id','6')->first();
        return view ('frontend.privacy',compact('privacy'));
    }

    public function term()
    {
        $term=AdminPages::where('id','9')->first();
        return view ('frontend.term',compact('term'));
    }
    public function customerCart()
    {
         return view('customer.cart');
    }

     public function singleSlider($slug)
    {
        $slider=AdminSlider::where('slug',$slug)->first();
        if (!empty($slider)) {
            $categoryResource=AdminCategory::where('slug','blog')->first();
                $blogs=$categoryResource->posts;
        return view('frontend.single-slider',compact('slider','blogs'));
        }else{
            return view('frontend.404');
        }
    }

    public function singleProduct(Request $request,$slug)
    {
        $product=Product::where('slug',$slug)->first();
        if (!empty($product)) {
        $productCategory=ProductCategory::where('status','1')->with('product')->get();
        $productReview=ProductReview::where('product_id',$product->id)->where('status','1')->get();
        $ipTrack = new ProductViewTrack;
        $ipTrack->login_device = $request->server('HTTP_USER_AGENT');
        $ipTrack->ip_address = \Request::ip();
        $ipTrack->product_id = $product->id;
        $ipTrack->save();
        return view('frontend.single-product',compact('product','productCategory','productReview'));
        }else{
            return view('frontend.404');
        }
    }

      public function newsLetterStore(Request $request)
        {
            $validator=Validator::make($request->all(), [
                'email' => 'required|email',
            ]);
            if ($validator->passes()) {
            $result=NewsLetterSubscription::create($request->all());
                if ($result) {
                    $data = array(
                        'message' =>'Thank You For Subscribing!' ,
                        'status'  =>'true'
                        );
                    return response()->json($data);
                }
                else{
                    return response()->json(['message'=>'Something went wrong !','status'=>'false']);
                }
            }else{
                $data= array(
                    'error' => true,
                    'errors'=>$validator->errors()
                     );
                return response()->json($data);
            }
        }


public function productReview(Request $request)
        {
            $validator=Validator::make($request->all(), [
                'nickname' => 'required',
                'review' => 'required',
            ]);
            if ($validator->passes()) {
            $result=ProductReview::create($request->all());
                if ($result) {
                    $data = array(
                        'message' =>'Thank You For Reviewing!' ,
                        'status'  =>'true'
                        );
                    return response()->json($data);
                }
                else{
                    return response()->json(['message'=>'Something went wrong !','status'=>'false']);
                }
            }else{
                $data= array(
                    'error' => true,
                    'errors'=>$validator->errors()
                     );
                return response()->json($data);
            }
        }
    public function productCheckout($slug)
    {
        $product=Product::where('slug',$slug)->first();
        if (!empty($product)) {
        return view('frontend.checkout-product',compact('product'));
        }else{
            return view('frontend.404');
        }
    }

      public function product()
    {
        $products=Product::where('status','1')->paginate(12);
        $productCategory=ProductCategory::where('status','1')->get();
        $title='All Products';
        return view('frontend.gride',compact('products','productCategory','title'));
    }

    public function singlePage($slug)
    {
        $page=AdminPages::where('slug',$slug)->first();
        if (!empty($page)) {
        return view('frontend.single-page',compact('page'));
        }else{
            return view('frontend.404');
        }
    }

    public function categoryResult($slug)
    {
        $category=productCategory::where('slug',$slug)->first();
        $productCategory=ProductCategory::where('status','1')->get();
        if ($category) {
            $title=$category->title;
            $products=Product::where('product_category_id',$category->id)->where('status','1')->paginate(12);
            return view('frontend.gride',compact('products','productCategory','title'));
        }
    }

    //  public function productSearch(Request $request)
    // {
    //          $title= $request->product;
    //          $productCategory=ProductCategory::where('status','1')->get();
    //          $products=Product::where('status','=','1')
    //                    ->where(function($query) use ($title){
    //                     $query->where('title', 'LIKE', '%'.$title.'%');
    //                     $query->orWhere('description', 'LIKE', '%'.$title.'%');
    //                     $query->orWhere('short_info', 'LIKE', '%'.$title.'%');
    //                 })
    //                 ->select('tbl_product.*')
    //                 ->paginate(12);
    //         return view('frontend.gride',compact('products','title','productCategory'));
    // }


        public function getVehicleMakerList($id)
        {
            $type = DB::table("tbl_vehicles")
            ->where("vehicle_type_id",$id)
            ->distinct()
            ->pluck("vehicle_maker");
            return response()->json($type);
        }

        public function getVehicleModel($vehicleMaker)
        {
            $type = DB::table("tbl_vehicles")
            ->where("vehicle_maker",$vehicleMaker)
            ->distinct()
            ->pluck("vehicle_model");
            return response()->json($type);
        }

        public function getVehicleCc($vehicleModel)
        {
            $type = DB::table("tbl_vehicles")
            ->where("vehicle_model",$vehicleModel)
            ->pluck("vehicle_cc");
            return response()->json($type);
        }



        public function getVehicleCcImage($vehicleCc)
        {
            $type = DB::table("tbl_vehicles")
            ->where("vehicle_cc",$vehicleCc)->first();
            return response()->json($type);
        }

    // public function getVehicleMakerList($id)
    //     {
    //         $type = DB::table("tbl_vehicle_maker")
    //         ->where("vehicle_type_id",$id)
    //         ->pluck("title","id");
    //         return response()->json($type);
    //     }

    //     public function getVehicleModel($id)
    //     {
    //         $type = DB::table("tbl_vehicle_model")
    //         ->where("vehicle_maker_id",$id)
    //         ->pluck("title","id");
    //         return response()->json($type);
    //     }

    //     public function getVehicleCc($id)
    //     {
    //         $type = DB::table("tbl_vehicle_cc")
    //         ->where("vehicle_model_id",$id)
    //         ->pluck("cc","id","image");
    //         return response()->json($type);
    //     }

    //     public function getVehicleCcImage($id)
    //     {
    //         $type = DB::table("tbl_vehicle_cc")
    //         ->where("id",$id)->first();
    //         return response()->json($type);
    //     }


    public function offerList()
    {
        $date=date('Y-m-d');
        $offers=Offer::where('status','1')->where('offer_expire_date','>=',$date)->paginate(6);
        return view('frontend.offerList',compact('offers'));
    }



    public function getQuote()
    {
        $vehicleType=VehicleType::where('status','1')->get();
        $insuranceType=InsuranceType::where('status','1')->get();
        return view('frontend.getQuote',compact('vehicleType','insuranceType'));
    }

    public function serviceList()
    {
        $services=Service::where('status','1')->paginate(4);
        $list=Service::where('status','1')->get();
        $vehicleTypeForFetch = DB::table("tbl_vehicle_type")->where('status','1')->pluck("title","id");
        return view('frontend.serviceList',compact('services','list','vehicleTypeForFetch'));
    }

    public function singleService($slug)
    {
        $service=Service::where('slug',$slug)->first();
        $vehicleTypeForFetch = DB::table("tbl_vehicle_type")->where('status','1')->pluck("title","id");
        if ($service) {
        return view('frontend.singleService',compact('service','vehicleTypeForFetch'));
        }else{
            return view('frontend.404');
        }
    }

	public function contact()
	{
		return view('frontend.contact');
	}

    public function about()
    {
        $faqs=AdminFaq::where('status','1')->take(5)->get();
        $testimonials=Testimonial::where('status','1')->get();
        $features=Feature::where('status','1')->get();
        return view('frontend.single-page',compact('faqs','testimonials','features'));
    }
	public function sentMail(Request $request)
        {
            $validator=Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phoneno' => 'required|digits:10',
                'message' => 'required',
            ]);
            if ($validator->passes()) {
            $request['inserted_date']=date('Y:m:d h:i:s');
            $result=AdminContact::create($request->all());
                if ($result) {
                    $data = array(
                        'message' =>'Message sent Successfully!' ,
                        'status'  =>'true'
                        );
                    return response()->json($data);
                }
                else{
                    return response()->json(['message'=>'Something went wrong !','status'=>'false']);
                }
            }else{
                $data= array(
                    'error' => true,
                    'errors'=>$validator->errors()
                     );
                return response()->json($data);
            }
        }


        public function productEnroll(Request $request)
        {
            $validator=Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',
            ]);
            if ($validator->passes()) {
            $result=ProductEnroll::create($request->all());
                if ($result) {
                    $data = array(
                        'message' =>'Enroll Successfully! we contact soon!' ,
                        'status'  =>'true'
                        );
                    return response()->json($data);
                }
                else{
                    return response()->json(['message'=>'Something went wrong !','status'=>'false']);
                }
            }else{
                $data= array(
                    'error' => true,
                    'errors'=>$validator->errors()
                     );
                return response()->json($data);
            }
        }

        public function quoteRequest(Request $request)
        {
            $validator=Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|digits:10',
                'vehicle_type_id' => 'required',
                'insurance_type_id' => 'required',
            ],
            ['required'=>'This field is required']);
            if ($validator->passes()) {
            $result=QuoteRequest::create($request->all());
                if ($result) {
                    $data = array(
                        'message' =>'Request sent Successfully!' ,
                        'status'  =>'true'
                        );
                    return response()->json($data);
                }
                else{
                    return response()->json(['message'=>'Something went wrong !','status'=>'false']);
                }
            }else{
                $data= array(
                    'error' => true,
                    'errors'=>$validator->errors()
                     );
                return response()->json($data);
            }
        }

    public function faq()
    {
        $faqs=AdminFaq::where('status','1')->get();
        $page_title='FAQ';
        $data= array('faqs' =>$faqs ,
                    'page_title'=>$page_title,
                     );
        return view('frontend.faq',$data);
    }

    public function blog()
    {
        $categoryResource=AdminCategory::where('slug','blog')->first();
        $blogs=$categoryResource->posts;
        $page_title='Blogs';
        $data= array(
                    'categoryResource' =>$categoryResource ,
                    'blogs' =>$blogs ,
                    'page_title'=>$page_title,
                     );
        return view('frontend.list-blog',$data);
    }

    public function singleBlog($slug)
        {
                $blog=AdminPosts::where('slug',$slug)->first();
                $categoryResource=AdminCategory::where('slug','blog')->first();
                $blogs=$categoryResource->posts;
                if (!empty($blog)) {
                $tags=PostTag::where('post_id',$blog->id)->get();
                return view('frontend.singleBlog',compact('blog','tags','blogs'));
                }else{
                    return view('frontend.404');
                }
        }

    public function video()
    {
        $page_title='Videos';
        $videos=AdminVideo::where('status','1')->paginate(6);
        $data= array('videos' =>$videos ,
                    'page_title'=>$page_title,
                     );
        return view('frontend.video',$data);
    }
    
    public function artistCollective()
    {
        return view('frontend.artist-collective');
    }

    public function ourAbout()
    {
        return view('frontend.about');
    }

    public function calli()
    {
        return view('frontend.calli');
    }

    public function gallery()
    {
        //  $galleries=Album::where('status','1')->orderBy('created_at','DESC')->paginate(6);
        //  $page_title='Gallery';
        //  $data= array('galleries' =>$galleries ,
        //             'page_title'=>$page_title,
        //              );
        return view('frontend.gallery');
    }

    public function viewGallery($slug)
        {
            $album=Album::where('slug',$slug)->first();
            if (!empty($album)) {
            $photos=Gallery::where('album_id',$album->id)->where('status','1')->get();
            return view('frontend.viewGallery',compact('photos','album'));
            }else{
            return view('frontend.404');
            }
        }

    public function team()
    {
        $teams=Team::where('status','1')->get();
        return view('frontend.team',compact('teams'));
    }

    public function blueBookStore(Request $request)
        {
            $validator=Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|digits:10',
                'vehicle_type_id' => 'required',
                'vehicle_maker_id' => 'required',
                'vehicle_model_id' => 'required',
                'vehicle_cc_id' => 'required',
                'last_renew_date' => 'required',
                'renew_from' => 'required',
                'renew_to' => 'required',
                'citizenships' => 'required',
                'bluebooks' => 'required',
                'photos' => 'required',
                'service_id' => 'required',
            ],
            ['required'=>'This field is required']
           );
            if ($validator->passes()) {

            $crud['name']=$request->name;
            $crud['email']=$request->email;
            $crud['phone']=$request->phone;
            $crud['vehicle_type_id']=$request->vehicle_type_id;
            $crud['vehicle_maker_id']=$request->vehicle_maker_id;
            $crud['vehicle_model_id']=$request->vehicle_model_id;
            $crud['vehicle_cc_id']=$request->vehicle_cc_id;
            $crud['last_renew_date']=$request->last_renew_date;
            $crud['renew_from']=$request->renew_from;
            $crud['renew_to']=$request->renew_to;
            $crud['service_id']=$request->service_id;

           if(!empty($request->file('citizenships'))){
            $image = $request->file('citizenships');
            $extension = $image->getClientOriginalExtension();
            $citizenshipName = 'citizenship'. time(). '.' . $extension;
            $image->move(public_path('images/user/citizenship'), $citizenshipName);             
            }
            $crud['citizenship'] = $citizenshipName;

            if(!empty($request->file('bluebooks'))){
            $image = $request->file('bluebooks');
            $extension = $image->getClientOriginalExtension();
            $bluebookName = 'bluebook'. time(). '.' . $extension;
            $image->move(public_path('images/user/bluebook'), $bluebookName);             
            }
            $crud['blue_book'] = $bluebookName;

            if(!empty($request->file('photos'))){
            $image = $request->file('photos');
            $extension = $image->getClientOriginalExtension();
            $photoName = 'photo'. time(). '.' . $extension;
            $image->move(public_path('images/user/photo'), $photoName);             
            }
            $crud['photo'] = $photoName;

            $result=ServiceEnroll::create($crud);
                if ($result) {
                    $data = array(
                        'message' =>'Service Enroll Successfully!' ,
                        'status'  =>'true'
                        );
                    return response()->json($data);
                }
                else{
                    return response()->json(['message'=>'Something went wrong !','status'=>'false']);
                }
            }else{
                $data= array(
                    'error' => true,
                    'errors'=>$validator->errors()
                     );
                return response()->json($data);
            }
        }
}
