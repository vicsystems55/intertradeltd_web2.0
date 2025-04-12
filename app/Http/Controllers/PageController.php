<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    //

    public function shortUrl(){
        return redirect()->away('https://docs.google.com/presentation/d/1MtVDBBDmFrzGP2g2hVEIjwFi8FMNjdT20uee-bn0GWo/edit#slide=id.g34b2edd2127_2_1');
    }

    public function index()
    {



        try {
          // Use Laravel's HTTP client to make the request
          $url = "https://graph.instagram.com/v21.0/17841448542035175/media?fields=id,caption,media_url,media_type&access_token=IGAAMyOFxY3NZABZAFBfN3ptVEVhT0NibmZA4ZATQxVjhTaUpla3FKbDM2LWJmME5keHhoQlFPS1F2R093NDRVYlhSVDBQbHp0dnNPaU1ncEs4d3RZAcm52VlpPSFA1eTJhdUtaZAXJ2RHVTc0lKUHd6WTBfSDBPZAm4wWGFQVFV0d2huZAwZDZD";

          // Fetch data using Laravel HTTP Client
          $response = \Illuminate\Support\Facades\Http::get($url);

          if ($response->failed()) {
              throw new \Exception('Error fetching Instagram posts: ' . $response->body());
          }

          // Decode JSON response and filter results
          $instagramPosts = collect($response->json('data'))
          ->filter(fn($post) => isset($post['media_url']) && $post['media_type'] === 'IMAGE')
          ->take(8)
          ->toArray();
      } catch (\Exception $e) {
          // Handle any errors
          $instagramPosts = [];
        //   \Log::error($e->getMessage());
      }

    //   return $instagramPosts;

        return view('home', compact('instagramPosts'));
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

        return redirect('/');

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
