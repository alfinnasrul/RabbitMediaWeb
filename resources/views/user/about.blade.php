@extends('layouts.muser')
@section('title', 'About | Rabbit Media &mdash; Digital Creative Service')
@section('content')
    <div id="fh5co-main">
        <div class="fh5co-narrow-content">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">About Us</h2>
                    <p class="fh5co-lead animate-box" data-animate-effect="fadeInLeft">Rabbit Media is a digital
                        creative service agency that established in 2015. We strive to serve the most reasonable COST,
                        the best QUALITY in digital creative services, and also strive to serve ONE-DAY services
                        commited to our customer satisfaction that according to "Capture and Bring your Moment with
                        Us".</p>
                    <p class="animate-box" data-animate-effect="fadeInLeft"> Rabbit Media uses a various kind of tools
                        such as Adobe Premiere Pro, Adobe After Effect, Adobe Photoshop, Corel Draw, And another
                        professional software.</p>
                </div>
                <div class="col-md-6 col-md-push-1 animate-box" data-animate-effect="fadeInLeft">
                    <img src="{{asset('images/adi.JPG')}}" alt="Rabbit Media" class="img-responsive">
                </div>
            </div>

        </div>

        <div class="fh5co-narrow-content  animate-box fh5co-border-bottom" data-animate-effect="fadeInLeft">
            <h2 class="fh5co-heading">Our Passionate Crews</h2>
            <div class="row">
                <div class="col-md-4 fh5co-staff">
                    <img src="{{asset('images/person1.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                    <h3>Diaz Ardian Alvianto</h3>
                    <h4>Founder, CTO</h4>
                    <p>Diaz currently acts as a sound engineer and videographer in the video production process. He began to pursue this field in 2012.</p>
                    <ul class="fh5co-social">
                        <li><a target="_blank" href="http://fb.com/dizaralvino"><i
                                        class="fab fa-facebook-square"></i></a></li>
                        <li><a target="_blank" href="http://instagram.com/diazardian"><i
                                        class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="http://twitter.com/diaz_Apocalyps"><i
                                        class="fab fa-twitter"></i></a></li>
                        <li><a href="whatsapp://send?text=Hello, diaz!&phone=+6285707800364&abid=+6285707800364"
                               class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="http://line.me/ti/p/~dizar1"><i class="fab fa-line"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 fh5co-staff">
                    <img src="{{asset('images/person2.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                    <h3>Fiqy Ainuzzaqy</h3>
                    <h4>Founder, CEO</h4>
                    <p>Fiqy has been active in the world of animation and video editing since 2009 and as a back-end developer since 2015.</p>
                    <ul class="fh5co-social">
                        <li><a target="_blank" href="https://facebook.com/fqnkk"><i
                                        class="fab fa-facebook-square"></i></a></li>
                        <li><a target="_blank" href="https://instagram.com/fq_whysoserious"><i
                                        class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/FqNkk"><i
                                        class="fab fa-twitter"></i></a></li>
                        <li><a href="whatsapp://send?text=Hello, fq!&phone=+628563094333&abid=+628563094333"
                               class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="http://line.me/ti/p/~fqnkk"><i class="fab fa-line"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 fh5co-staff">
                    <img src="{{asset('images/person3.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                    <h3>Adi Prasetiyo</h3>
                    <h4>Founder, CMO</h4>
                    <p>Adi has been active in the world of graphic design since 2010 and as a front-end developer since 2015.</p><br>
                    <ul class="fh5co-social">
                        <li><a target="_blank" href="http://fb.com/russeltiyo"><i
                                        class="fab fa-facebook-square"></i></a></li>
                        <li><a target="_blank" href="http://instagram.com/russeltiyo"><i
                                        class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="http://twitter.com/russeltiyo"><i
                                        class="fab fa-twitter"></i></a></li>
                        <li><a href="whatsapp://send?text=Hello, adi!&phone=+6282230830233&abid=+6282230830233"
                               class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="http://line.me/ti/p/~fqnkk"><i class="fab fa-line"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="fh5co-narrow-content fh5co-border-bottom">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">This is What We Got</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-magic"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>One Stop Service</h3>
                            <p>We're able to provide all multimedia needs in a service agency.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-flash"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>One Day Service</h3>
                            <p>We're able to overcome video editing in a day.</p>
                            <blockquote>P.S.: only when the footage are provided by customers.</blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection