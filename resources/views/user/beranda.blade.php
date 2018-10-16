@extends('layouts.muser')
@section('title', 'Home | Rabbit Media &mdash; Digital Creative Service')
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

        <div class="fh5co-narrow-content">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Our Services</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="fa fa-video"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Videography</h3>
                            <p>Video production services for movie/documentary, video advertising, company profile
                                video, event documentary, aftermovies, etc. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="fa fa-camera"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Photoshoot</h3>
                            <p>We provide a variety of photoshoot services for graduation, pre-wedding, studio
                                photoshoot, maternity photoshoot, and more.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="fa fa-film"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Wedding Clip</h3>
                            <p>We provide wedding and reception documentary and also wedding clip producing with
                                romantic-cinematic effect.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Mockup Design</h3>
                            <p>We also provide application (web/mobile-based) mockup design services with minimalist UI
                                and UX that can be customized to your needs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Graphic Design</h3>
                            <p>Services for designing logo, poster, curriculum vitae (CV), and other products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="fa fa-print"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Digital Offset</h3>
                            <p>Services for your printing needs. we print a wide variety of products such as: catalogs,
                                magazines, banners, ID cards, flyers, brochures, stickers, yearbooks, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <a target="_blank" href="https://drive.google.com/open?id=11DZLDU6qtKrKZ0dN7nE18ZjNLVWB6Vhx">
                            <div class="fh5co-icon">
                                <i class="fa fa-file-pdf"></i>
                            </div>
                        </a>
                        <div class="fh5co-text">
                            <h3>Pricelist</h3>
                            <p>For further details about services and prices, please <a target="_blank"
                                                                                        href="https://drive.google.com/open?id=11DZLDU6qtKrKZ0dN7nE18ZjNLVWB6Vhx">click
                                    here.</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <a target="_blank" href="https://drive.google.com/open?id=1VhTZ6NtB8P7sA86In7mrXbZDeQM9aF8d">
                            <div class="fh5co-icon">
                                <i class="fa fa-file-pdf"></i>
                            </div>
                        </a>
                        <div class="fh5co-text">
                            <h3>Wedding Full Pack</h3>
                            <p>For further details about <em>wedding services</em> and prices, please
                                <a target="_blank" href="https://drive.google.com/open?id=1VhTZ6NtB8P7sA86In7mrXbZDeQM9aF8d">
                                    click here.</a><br> And <a target="_blank" href="https://drive.google.com/open?id=1aU-cSrJgZXrDEsxMDAdRx_f97B9aMW8u">click here</a> for the pricelist of wedding <em>photo/video-only</em> pack.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fh5co-testimonial">
            <div class="fh5co-narrow-content">
                <div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
                    @foreach($testimonials as $testimonial)
                        <div class="item">
                            <figure class="text-center">
                                <img src="{{asset('images/testimonial_person4.jpg')}}" alt="{{$testimonial->name}}">
                            </figure>
                            <p class="text-center quote">
                                @if($testimonial->rate == 1)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                @elseif($testimonial->rate == 2)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                @elseif($testimonial->rate == 3)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                @elseif($testimonial->rate == 4)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                @elseif($testimonial->rate == 5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                @elseif($testimonial->rate == 0.5)
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                @elseif($testimonial->rate == 1.5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                @elseif($testimonial->rate == 2.5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                @elseif($testimonial->rate == 3.5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                @elseif($testimonial->rate == 4.5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                @endif
                                <br>&ldquo;{{$testimonial->comment}}. &rdquo;
                                <cite class="author">&mdash; {{$testimonial->name}}</cite>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5"
             id="counter-animate">
            <div class="fh5co-narrow-content animate-box">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="15" data-speed="5000"
                              data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Client</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="300" data-speed="5000"
                              data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Photos</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="150" data-speed="5000"
                              data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Videos</span>
                    </div>
                </div>
            </div>
        </div>
@endsection