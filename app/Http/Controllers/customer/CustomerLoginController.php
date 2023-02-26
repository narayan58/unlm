<?php

namespace App\Http\Controllers\customer;

use App\Model\admin\Customer;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Input;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Validator;
use Session;
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}




class CustomerLoginController extends Controller
{

    protected $redirectTo = '/customer/dashboard';
    protected $guard = 'customer';


    protected function guard()
    {
        return Auth::guard('customer');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    {
        return 'email';
    }
    public function loginView()
    {
        return view('customer.login');
    }


    public function registerView()
    {
        return view('customer.register');
    }

        public function login(Request $request)
    {
         $errors = [$this->username() => trans('auth.failed')];
        $validator=Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);
        if ($validator->passes()) {
            $user=Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password,'status' => '1']);
            if ($user==true) {
                    $data = array(
                            'error'         => 'success',
                            'message'       => 'Login Successful',
                            'from_login'    => $request->from_login,
                        );
                return response()->json($data);
             }else{
             $data= array(
                    'error' => 'notMatch',
                    'message'=>'Crediantial Not match'
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

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
         return redirect()->route('index');
    }



    public function registerCustomer(Request $request)
        {
            $validator=Validator::make($request->all(), [
                'name' => 'required',
                'address' => 'required',
                'city' => 'required',
                'mobile' => 'required',
                'email'=>'required|unique:customers',
                'password' => 'required|confirmed|min:6',
            ]);
            if ($validator->passes()) {
            $a['name']=$request->name;
            $a['email']=$request->email;
            $a['address']=$request->address;
            $a['city']=$request->city;
            $a['mobile']=$request->mobile;
            $a['status']=1;
            $password = $request->password;
            $a['password'] = bcrypt($password);
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $verifyCode = mt_rand(10, 99). mt_rand(10, 99). $characters[rand(0, strlen($characters) - 1)];
            $a['verification_code'] = $verifyCode;
            $result=Customer::create($a);
            /*if ($result) {
                    $arrayName = array(
                        'name'      => $result->name,
                        'email'     => $result->email,
                        'slug'     => $result->slug,
                        'verifyCode'     => $result->slug,
                        'verification_code'     => $result->verification_code,
                        'subject'   => 'Customer Verification',
                        );
                    Mail::send('email.customer-email-verify', $arrayName, function ($m) use ($arrayName) {
                    $mail_from = env('MAIL_USERNAME', 'noreplytechcaretest@gmail.com');
                    $m->from($mail_from, 'NTI');
                    $m->to($arrayName['email'])
                    ->subject($arrayName['subject']);
                    });           
            }*/
                if ($result) {
                    $user=Auth::guard('customer')->attempt(['email' => $result->email, 'password' => $request->password,'status' => '1']);
                    $user = array(
                            'error'         => 'success',
                            'message'       => 'Login Successful',
                        );
                    return response()->json($user);
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


    public function verifyLink($code = '')
    {
        $status = $this->verify($code);

        if ($status['status'] == true) {
            $successMessage = $status['message'];
            session()->flash('success', $successMessage);
            return redirect()->route('student.login');
        }
        else {
            $errorMessage = $status['message'];
            session()->flash('error', $errorMessage);
            return redirect()->route('student.login');
        }

    }


    public function verifyCode(Request $request)
    {
        $status = $this->verify($request->verify_code);

        if ($status['status'] == true) {
            $successMessage = $status['message'];
            session()->flash('success', $successMessage);
            return redirect()->route('student.login');

        }
        else {

            $errorMessage = $status['message'];
            session()->flash('error', $errorMessage);
            return redirect()->route('student.login');
        }
    }

    function verify($code)
    {
        $verify_status['status'] = false;
        try {
            $resEmp = Customer::where('verification_code', $code)->first();
            if (count($resEmp) == 1) {
                if ($resEmp->verification_status == '1') {
                    $message = 'Your account already verified !';
                } else {
                    $now = Carbon::now();
                    $data = Customer::where('id', $resEmp->id)->update(['verification_date' => $now,
                        'verification_status' => '1'
                    ]);
                    $verify_status['status'] = true;

                    $message = 'Thank you! Your email address is verified';
                }

            } else {
                $message = "Sorry Invalid link or link is already expired. Please try with valid link";
            }
            $verify_status['message'] = $message;
            return $verify_status;

        } catch (\Exception $e) {
            return $verify_status['message'] = $e->getMessage();
        }
    }

    public function forgotPassword(){
        return view('customer.forgotpassword');
    }


    public function postForgotPassword(Request $request){
        $this->validate($request, [
            'email'              => 'required',
        ]);
        $userdetail = Customer::where('email',$request->email)->first();

        if (!empty($userdetail)) {
            $verifytoken = Str::random(20);
            $otpcode = random_int(10000, 99999);
            $userdetail->verify_token = $verifytoken;
            $userdetail->otp_code = $otpcode;
            $userdetail->save();

            // send verify code to mail and mobile number
            if ($userdetail) {
            $arrayName = array(
                        'otpcode'           => $otpcode,
                        'name'              => $userdetail->name,
                        'email'             => $userdetail->email,
                        'subject'           => 'Forgot Password Code Verify',
                        );
                    Mail::send('email.customer-email-verify', $arrayName, function ($m) use ($arrayName) {
                    $mail_from = env('MAIL_USERNAME', 'noreplytechcaretest@gmail.com');
                    $m->from($mail_from, 'Bagmarts');
                    $m->to($arrayName['email'])
                    ->subject($arrayName['subject']);
                    });
            }
            Session::flash('success_message', "Please Check your mail or SMS, OTP code has been send");
            return redirect(route('verifytoken',['id'=>$userdetail->mobile, 'token' => $verifytoken]));
        }else{
            Session::flash('message', "User Doesn't Exists");
            return redirect(route('forgotpassword'));
        }
    }

     public function vefifyCode($phone,$token){
        $c = Customer::where('mobile',$phone)->where('verify_token',$token)->first();
        if (!empty($c)) {
            return view('customer.verifytoken',compact('c'));
        }else{
            return view('frontend.404');
        }
    }

    public function postVefifyCode(Request $request){
        // return $request->all();
        $this->validate($request, [
            'otpcode'           => 'required',
            'mobile'             => 'required',
        ]);
        $userdetail = Customer::where('mobile',$request->mobile)
                    ->where('otp_code',$request->otpcode)
                    ->first();
        if (!empty($userdetail)) {
            $verifytoken = Str::random(20);
            $userdetail->verify_token = $verifytoken;
            $userdetail->otp_code = null;
            $userdetail->save();

            Session::flash('success_message', "Please Update New Password");
            return redirect(route('finalchangepassword',['id'=>$userdetail->mobile, 'token' => $verifytoken]));
        }else{
        Session::flash('message', "OTP not match !");
        return back();
        }
    }

    public function finalChangePassword($mobile,$token){
        $c = Customer::where('mobile',$mobile)
                    ->where('verify_token',$token)
                    ->whereNull('otp_code')
                    ->first();
        if (!empty($c)) {
            $result = array(
                'c'        => $c,
            );
            return view('customer.finalupdatepassword',$result);
        }else{
            return view('frontend.404');
        }
    }

    public function postUpdatePassword(Request $request,$mobile,$token){
        $this->validate($request, [
            'password'                  => 'required|min:8|confirmed',
            'password_confirmation'     => 'required|min:8',
        ]);
        $c = Customer::where('mobile',$mobile)
                    ->where('verify_token',$token)
                    ->whereNull('otp_code')
                    ->first();
        if (!empty($c)) {

            $c->verify_token = null;
            $c->password = bcrypt($request->password);
            $c->save();
            Session::flash('success_message', "Password has been Successfully changed. Please login with your new password");
            return redirect(route('customer.login'));
        }else{
            return redirect(route('finalchangepassword',['id'=>$mobile, 'token' => $token]));
        }
    }

}

