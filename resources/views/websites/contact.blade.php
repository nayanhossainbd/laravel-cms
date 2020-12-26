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
            <h1 class="mb-3 bread">Conatct</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                            class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                        class="ion-ios-arrow-forward"></i></span></p>
        </div>
    </div>
</div>
</section>
@endsection
@section('content')

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-4">
                <p><span>Address:</span> {{ $setting->address }}</p>
            </div>
            <div class="col-md-4">
                <p><span>Phone:</span> <a href="tel:{{ $setting->phone_no }}">{{ $setting->phone_no }}</a></p>
            </div>
            <div class="col-md-4">
                <p><span>Email:</span> <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
            </div>
            
        </div>
        @if(session('message'))
        <div class="row mb-2">
            <div class="col-lg-12">
              <script>
                 Toast.fire({
                    icon: 'success',
                    title: $({{ session('message') }})
                  })
              </script>
                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
            </div>
        </div>
    @endif
        <div class="row block-9 no-gutters">
            <div class="col-lg-6 order-md-last d-flex">
                <form action="{{ url('contact/post') }}" method="POST" class="bg-light p-4 p-md-5 contact-form">
                   @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 d-flex">
                <div id="map" class="bg-white">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d58435.58110882498!2d90.38057272255934!3d23.73939672602096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d23.7393182!2d90.41439!4m5!1s0x3755b8609b612b9b%3A0x673160dc20b74c0c!2s159%20Shanti%20Nagar%20Road%2C%20Dhaka!3m2!1d23.7393221!2d90.4155924!5e0!3m2!1sen!2sbd!4v1608548706427!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection