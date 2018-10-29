<?php

namespace App\Http\Controllers\User;

use App\layanan;
use App\Order;
use App\Portfolio;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class RabbitController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id','asc')->take(12)->get();
        $testimonials = Testimonial::where('rate', '>','3')->take(10)->orderBy('id','desc')->get();
        return view('user.beranda',compact('portfolios','testimonials'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function portfolio()
    {
        $portfolios = Portfolio::orderBy('id','desc')->get();
        return view('user.portfolio',compact('portfolios'));
    }

    public function order()
    {
        $layanan = layanan::all();
        return view('user.order',compact('layanan'));
    }
    public function postOrder(Request $request)
    {
        Order::create($request->all());
        return view('user.beranda')->withSuccess('Wait for any further confirmation from us via email/phone. Thanks for using our services! :)');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function feedback()
    {
        return view('user.feedback');
    }
    public function postFeedback(Request $request)
    {
        Testimonial::create($request->all());
        return view('user.beranda')->withSuccess('Thanks for reviewing us! Because of it, we`re potentially become a better company :)');
    }
}
