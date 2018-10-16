@extends('layouts.muser')
@section('title', 'Feedback | Rabbit Media &mdash; Digital Creative Service')
@section('content')
    <div id="fh5co-main">
        <div class="fh5co-narrow-content fh5co-border-bottom animate-box" data-animate-effect="fadeInLeft">
            <div class="row">
                <div class="col-md-4">
                    <h1>Give Us a Review</h1>
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <form action="{{route('feedback.submit')}}" method="POST">
                                {{csrf_field()}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Name :</label>
                                        <input id="name" type="text" class="form-control" placeholder="your name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label">Email :</label>
                                        <input id="email" type="email" class="form-control" placeholder="your email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="rating" class="control-label">Rating :</label><br>
                                        <fieldset id="rating" class="rating" aria-required="true">
                                            <input type="radio" id="star5" name="rating" value="5" required>
                                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                            <input type="radio" id="star4half" name="rating"
                                                   value="4.5" required>
                                            <label class="half" for="star4half"
                                                   title="Pretty good - 4.5 stars"></label>
                                            <input type="radio" id="star4" name="rating" value="4" required>
                                            <label class="full" for="star4"
                                                   title="Pretty good - 4 stars"></label>
                                            <input type="radio" id="star3half" name="rating"
                                                   value="3.5" required>
                                            <label class="half" for="star3half"
                                                   title="Meh - 3.5 stars"></label>
                                            <input type="radio" id="star3" name="rating" value="3" required>
                                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                                            <input type="radio" id="star2half" name="rating"
                                                   value="2.5" required>
                                            <label class="half" for="star2half"
                                                   title="Kinda bad - 2.5 stars"></label>
                                            <input type="radio" id="star2" name="rating" value="2" required>
                                            <label class="full" for="star2"
                                                   title="Kinda bad - 2 stars"></label>
                                            <input type="radio" id="star1half" name="rating"
                                                   value="1.5" required>
                                            <label class="half" for="star1half"
                                                   title="Meh - 1.5 stars"></label>
                                            <input type="radio" id="star1" name="rating" value="1" required>
                                            <label class="full" for="star1"
                                                   title="Sucks big time - 1 star"></label>
                                            <input type="radio" id="starhalf" name="rating" value="0.5"
                                                   required>
                                            <label class="half" for="starhalf"
                                                   title="Sucks big time - 0.5 stars"></label>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="comment" class="control-label">Comment :</label>
                                        <textarea id="comment" class="form-control" placeholder="write your comment here..." name="comment" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-block" value="SUBMIT">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </form>
        </div>
@endsection