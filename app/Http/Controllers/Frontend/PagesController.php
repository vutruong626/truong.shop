<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Page;
use App\Models\DetailOrder;
use App\Models\Order;
use DB;
use Validator;
use League\Flysystem\Config;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shop = Post::orderBy('id', 'DESC')->skip(0)->take(6)->get();
        $news = Page::orderBy('id', 'DESC')->skip(0)->take(6)->get();
        return view('frontend.pages.index',compact('shop','news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getShop(Request $request)
    {
        
        $shop = Post::orderBy('id', 'DESC')->skip(0)->take(6)->get();
        return view('frontend.products.list-product',compact('shop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getDetailShop(Request $request,$slug)
    {
        $shop = Post::where('slug', $slug)->first();
        return view('frontend.products.detail-product',compact('shop'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDetailCart(Request $request,$idsp ,$qty = 0)
    {
        $shop_vt = Post::first();
        $data = session()->get('cart');
        $total = 0;
        $idsp = [];
        $shop_vt = [];
        $cart_shop = [];
        if($qty > 0){
            $data[$id] = $qty;
        }
        if(count($data) > 0){
            foreach ($data as $key => $value) {
                $shop = Post::where('id', $key)->first();
                
                $total += $value;
                @$cart_shop['weight'] += $value * $shop->price;
                $shop['qty'] = $value;
                array_push($shop_vt,$shop);
             }
        }else {
            @$cart_shop['weight'] = 0;
        }
        return view('frontend.products.detail-cart',compact('cart_shop','cart_shop','shop_vt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postSessionCart(Request $request)
    {
        
        $carts = session()->get('cart');
        print_r($carts);die;
        $params = $request->all();
        $id_products = $params['id_product'];
        $num_products = $params['number_product'];
        for ($i = 0; $i < count($id_products); $i++) {
            $carts[$id_products[$i]] = $num_products[$i];
        }
        session()->put('cart', $carts);
        return redirect()->back()->with('msg', 'The Message');
    }
    public function handleCart($act, $idsp, $qty = 0)
    {
        $data = session()->get('cart');
        if ($act == 'add') {
            @$data[$idsp]++;
        }
        if ($act == 'remove') {
            unset($data[$idsp]);
        }
        if ($qty > 0) {
            $data[$idsp] = $qty;
        }
        $cart_shop = [];
        foreach ($data as $key => $value) {
            $shop = DB::table('posts')
                ->select('title', 'price', 'image')
                ->where('id', $key)->first();

            $shop->qty = $value;
            $cart_shop[$key] = $shop;
            @$cart_shop['total'] += $value * $shop->price;
        }
        session()->put('cart', $data);
        session()->put('cart_shop', $cart_shop);
        return redirect()->route('detail_cart');
    }

    public function getClientInfo($idsp, $qty = 0){

        $shop_vt = Post::first();
        $data = session()->get('cart');
        $total = 0;
        $idsp = [];
        $shop_vt = [];
        $cart_shop = [];
        if($qty > 0){
            $data[$id] = $qty;
        }
        if(count($data) > 0){
            foreach ($data as $key => $value) {
                $shop = Post::where('id', $key)->first();
                
                $total += $value;
                @$cart_shop['weight'] += $value * $shop->price;
                $shop['qty'] = $value;
                array_push($shop_vt,$shop);
             }
        }else {
            @$cart_shop['weight'] = 0;
        }
        return view('frontend.products.client_info',compact('shop_vt','cart_shop'));
    }

    public function postClientInfo(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
        ];
        $messages = [
            'name.required' => 'Vui lòng nhập họ tên',
            'city.required' => 'Vui lòng chọn Tỉnh/TP',
            'address.required' => 'Vui lòng chọn địa chỉ   ',
            'district.required' => 'Vui lòng chọn Quận/huyện',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $data_dh = new Order();
            $data_dh->name = $request->name;
            $data_dh->company = $request->company;
            $data_dh->city = $request->city;
            $data_dh->address = $request->address;
            $data_dh->district = $request->district;
            $data_dh->zipcode = $request->zipcode;
            $data_dh->phone = $request->phone;
            $data_dh->email = trim($request->email);
            $data_dh->note = $request->note;
        }

        if ($data_dh->save()) {
            $data = session()->get('cart');
            // update chuyen qua mail
            $cart_detail = [];
            $total = 0;
            foreach ($data as $key => $value) {
                $shop = Post::where('id', $key)
                                ->first();
                $shop['qty'] = $value;
                $total += $value * $shop->price; // update chuyen qua mail
                array_push($cart_detail, $shop); // update chuyen qua mail
                $ctdonhang = new DetailOrder();
                $ctdonhang->amount = $value;
                $ctdonhang->price = $shop->price;
                $ctdonhang->id_posts = $shop->id;
                $ctdonhang->id_orders = $data_dh->id;
                $ctdonhang->save();
            }
            $cart_detail['total'] = $total; // update chuyen qua mail

        }
        // $provinces = Province::select('id', 'name')
        //     ->where('id', $request->city)
        //     ->first();
        // $area['city'] = trim($provinces->name);
        // // print_r($area['city']);die;
        // $district = District::select('id', 'name')
        //     ->where('id', $request->district)
        //     ->first();
        // $area['district'] = trim($district->name);
        $area['payment_label'] = trim($request->payment_label);
        Mail::send('frontend.email.email', ['data_dh' => $data_dh, 'area' => $area, 'cart_detail' => $cart_detail], function ($message) use ($data_dh) {
            $message->from('vutruongdfm@gmail.com', 'truong.shop.com');
            $message->subject('Đơn hàng #');
            $message->bcc($data_dh->email);
            $message->to('vutruongdfm@gmail.com');
        });
        // chạy lệnh để mail serve run:
        // php artisan vendor:publish --tag=laravel-mail
        $request->session()->forget('cart');
        $request->session()->forget('cart_detail');
        return redirect()->route('success');
        // if ($request->radio_1 == 1) {
        //     return redirect()->route('success');
        // } else {
        //     $url = $this->connectNganLuong($data_dh->id, $total);
        //     return Redirect::to($url);
        // }
    }
    public function getSuccess(){
        return view('frontend.products.order_success');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAboutUs()
    {
        return view('frontend.pages.about-us');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getNews()
    {
        $shop = Post::orderBy('id', 'DESC')->skip(0)->take(4)->get();
        $news = Page::orderBy('id', 'DESC')->skip(0)->take(6)->get();
        return view('frontend.news.list-news',compact('news','shop'));
    }
    public function getDetallNews($slug){
        $shop = Post::orderBy('id', 'DESC')->skip(0)->take(4)->get();
        $news = Page::where('slug', $slug)->first();
        $list_new = Page::orderBy('id', 'DESC')->skip(0)->take(6)->get();
        return view('frontend.news.detail-news',compact('news','shop','list_new'));
    }
    public function getContact(){
        return view('frontend.pages.contact');
    }
    
}