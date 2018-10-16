@extends('layouts.muser')
@section('title', 'Contact | Rabbit Media &mdash; Digital Creative Service')
@section('content')
    <div id="fh5co-main">
        <div id="map"></div>
        <div class="fh5co-more-contact">
            <div class="fh5co-narrow-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-envelope-o"></i>
                            </div>
                            <div class="fh5co-text">
                                <p><a href="mailto://info@rabbit-media.net">info@rabbit-media.net</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-map-o"></i>
                            </div>
                            <div class="fh5co-text">
                                <p>Komplek Bintang Diponggo Kav. 885, Surabaya, East Java, Indonesia 60256</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="fh5co-text">
                                <p><a href="tel://+628563094333">+62-856-3094-333</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">

            <div class="row">
                <div class="col-md-4">
                    <h1>Get In Touch</h1>
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <form action="{{route('contact.submit')}}" method="POST">
                                {{csrf_field()}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" name="subject" required minlength="3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea id="message" cols="30" rows="7" class="form-control" placeholder="Message" name="message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-md" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
@endsection