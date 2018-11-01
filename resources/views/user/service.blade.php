@extends('layouts.muser')
@section('title', ''.$jenislayanan->nama.' Services | Rabbit Media &mdash; Digital Creative Service')
@section('content')
    <div id="fh5co-main">
        <div class="fh5co-narrow-content fh5co-border-bottom animate-box" data-animate-effect="fadeInLeft">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Our {{$jenislayanan->nama}}
                Services</h2>
            <div class="row">
                <div class="col-lg-12">
                    @foreach($layanans as $layanan)
                        <div class="thumbnail col-lg-6">
                            <div class="caption">
                                <h1 class="text-center"
                                    style="color: #592f83; font-size: 40px;"> {{$layanan->nama_layanan}} </h1>
                                <h2>Fasilitas : </h2> {{$layanan->isi_layanan}}<br><br>
                                <h2>Harga : </h2> {{$layanan->harga}}<br><br>
                                <center><a href="{{route('order-id', ['id' =>  $es = encrypt($layanan->id)])}}"><button type="button" class="btn btn-primary btn-lg">Pilih</button></a></center>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{--<ul class="nav nav-tabs" id="myTab" role="tablist">
                <div class="row">
                    <div class="col-md-4">
                        <h1>Our Service</h1>
                    </div>
                </div>
                @foreach($jenislayanans as $jenislayanan)
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#{{$jenislayanan->id}}" role="tab"
                           id="{{$jenislayanan->nama}}" aria-selected="true"
                           onclick="showService('{{$jenislayanan->id}}','{{$jenislayanan->nama}}')">
                            {{$jenislayanan->nama}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="serviceTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @foreach($layanan as $layanan)
                        <a href=""> {{$layanan->nama_layanan}}</ul></a>
                        <ul>{{$layanan->isi_layanan}}</ul>
                        <ul>{{$layanan->harga}}</ul>
                    @endforeach
                </div>
            </div>--}}
        </div>
    </div>
@endsection