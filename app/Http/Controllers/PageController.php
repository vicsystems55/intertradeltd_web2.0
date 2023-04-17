<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    //

    public function index()
    {


        return view('home');
    }

    public function about()
    {
        # code...

        return view('about');
    }

    public function contact()
    {
        # code...

        return view('contact');
    }

    public function services(Request $request)
    {
        # code...

        return view($request->page??'services');
    }

    public function projects()
    {
        # code...

        return view('projects');
    }

    public function blogs()
    {
        # code...

        return view('blogs');
    }

    public function blog()
    {
        # code...

        return view('blog');
    }

    public function posts($slug)
    {
        # code...

        return view($slug);
    }

    public function shop()
    {
        # code...

        $products = Http::get('https://itladmin.vicsystems.com.ng/api/products');


        $products = json_decode($products);



        return view('shop', compact('products'));
    }

    public function product()
    {
        # code...

        return view('product');
    }

    public function cart()
    {
        # code...

        return view('cart');
    }

    public function checkout()
    {
        # code...

        return view('checkout');
    }

    public function loadCalculator()
    {
        # code...

        return view('loadCalculator');
    }
}
