@extends('layouts.muser')
@section('title', 'Portfolio | Rabbit Media &mdash; Digital Creative Service')
@section('content')
    <div id="fh5co-main">
        <div class="fh5co-gallery">
            @foreach($portfolios as $portfolio)
                <a class="gallery-item" href="#">
                    <img src="{{asset('images/portfolio/'.$portfolio->url)}}" alt="{{$portfolio->name}}">
                    <span class="overlay">
                        <h2>{{$portfolio->name}}</h2>
                        <span>{{$portfolio->qty}} Photos</span>
                    </span>
                </a>
            @endforeach
        </div>
@endsection