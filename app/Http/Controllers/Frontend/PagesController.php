<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Page;
use DB;
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

    public function getClientInfo(){
        return view('frontend.products.client_info');
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