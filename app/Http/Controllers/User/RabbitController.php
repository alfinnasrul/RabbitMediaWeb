<?php

namespace App\Http\Controllers\User;

use App\JenisLayanan;
use App\layanan;
use App\Order;
use App\Portfolio;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class RabbitController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id','asc')->take(12)->get();
        $testimonials = Testimonial::where('rate', '>','3')->take(10)->orderBy('id','desc')->get();
        $jenisLayanans = JenisLayanan::all();

        return view('user.beranda',compact('portfolios','testimonials','jenisLayanans'));
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

    public function detailService($id)
    {
        $jenislayanan = JenisLayanan::find($id);
        $layanans = layanan::where('jenislayanan_id',$jenislayanan->id)->get();
        return view('user.service',compact('jenislayanan','layanans'));
    }

    public function order()
    {
        $types = layanan::all();
        $detail = null;
        $user = User::all();
        return view('user.order',compact('types','detail','user'));
    }

    public function orderid(Request $request)
    {

        $detail = layanan::find(decrypt($request->id));
        $types = layanan::all();
        $user = User::all();
        return view('user.order',compact('types','detail','user'));
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
