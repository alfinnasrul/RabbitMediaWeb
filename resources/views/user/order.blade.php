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

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <form method="post" action="{{route('order.submit')}}">
                            {{csrf_field()}}
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="name" class="control-label">Name :</label>
                                    <input id="name" type="text" class="form-control" placeholder="your name"
                                           name="name" value="@guest @else {{ Auth::user()->name }} @endguest" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Email :</label>
                                    <input id="email" type="email" class="form-control" placeholder="your email"
                                           name="email" value="@guest @else {{ Auth::user()->email }} @endguest"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label">Phone :</label><br>
                                    <input id="phone" type="text" class="form-control"
                                           placeholder="your phone number" name="phone"
                                           value=""
                                           onkeypress="return hanyaAngka(event,false)" required>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="control-label">Address :</label>
                                    <input id="address" type="text" class="form-control"
                                           placeholder="your current address" name="address"
                                           value="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service" class="control-label">Service :</label>
                                    <select id="service" name="service" class="form-control" required>
                                        @if($detail != null)
                                            <option value="{{$detail->id}}"
                                                    selected>{{App\JenisLayanan::find($detail->jenislayanan_id)->nama}}
                                                - {{$detail->nama_layanan}}</option>
                                        @else
                                            <option value="" disabled selected>-- Choose Service--</option>
                                        @endif
                                        @foreach($types as $layanan)
                                            <option value="{{$layanan->id}}">{{App\JenisLayanan::find($layanan->jenislayanan_id)->nama}}
                                                - {{$layanan->nama_layanan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="control-label">Description :</label>
                                    <textarea id="description" class="form-control"
                                              placeholder="describe your request detail heree..." name="description"
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
        </div>
    </div>
@endsection