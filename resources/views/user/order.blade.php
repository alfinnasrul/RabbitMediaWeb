@extends('layouts.muser')
@section('title', 'Order | Rabbit Media &mdash; Digital Creative Service')
@section('content')
    <div id="fh5co-main">
        <div class="fh5co-narrow-content fh5co-border-bottom animate-box" data-animate-effect="fadeInLeft">
            <div class="row">
                <div class="col-md-4">
                    <h1>Order Form</h1>
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <form action="{{route('order.submit')}}" method="POST">
                                {{csrf_field()}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Name :</label>
                                        <input id="name" type="text" class="form-control" placeholder="your name"
                                               name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label">Email :</label>
                                        <input id="email" type="email" class="form-control" placeholder="your email"
                                               name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="control-label">Phone :</label><br>
                                        <input id="phone" type="text" class="form-control"
                                               placeholder="your phone number" name="phone"
                                               onkeypress="return hanyaAngka(event,false)" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="control-label">Address :</label>
                                        <input id="address" type="text" class="form-control"
                                               placeholder="your current address" name="address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="service" class="control-label">Service :</label>
                                        <select id="service" name="service" class="form-control" required>
                                            <option value="" disabled selected>-- Choose Service--</option>
                                            <option value="Videography">Videography</option>
                                            <option value="Photoshoot">Photoshoot</option>
                                            <option value="Wedding Clip">Wedding Clip</option>
                                            <option value="Mockup Design">Mockup Design</option>
                                            <option value="Graphic Design">Graphic Design</option>
                                            <option value="Digital Offset">Digital Offset</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="control-label">Description :</label>
                                        <textarea id="description" class="form-control"
                                                  placeholder="describe your request detail here..." name="description"
                                                  cols="30" rows="7" required></textarea>
                                    </div>
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