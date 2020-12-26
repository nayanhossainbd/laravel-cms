@php
    $setting=App\Models\Setting::latest()->first();
    // dd($setting->logo);
@endphp
@extends('websites.layouts.master')
@section('banner')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('website/images/bg_1.jpg') }}');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                            class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
                        class="ion-ios-arrow-forward"></i></span></p>
        </div>
    </div>
</div>
</section>
@endsection
@section('content')


@endsection