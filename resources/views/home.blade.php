@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="700" alt="">
        </div>
        @foreach($menus as $menu)
        <div class="col-md-4">
            <div class="card">
              <img src="{{ url('uploads') }}/{{ $menu->gambar }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $menu->nama_menu }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($menu->harga)}} <br>
                    <strong>Stok :</strong> {{ $menu->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $menu->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $menu->id }}" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection
