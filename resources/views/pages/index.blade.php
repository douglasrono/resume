@extends('layouts.app')

@section('content')
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" class="text-warning">DOUGLAS RONO</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400" class="text-success">I’m a software engineer specializing in
                        building (and occasionally designing) exceptional digital experiences.</h2>
                    <div data-aos="fade-up" data-aos-delay="800">

                        <a href="#about" class="btn-get-started scrollto">READ MORE</a>
                    </div>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/prof.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <section id="clients" class="clients clients">
        <div class="container">

            <div class="row">
                <marquee width="40%" direction="left" height="30%">
                    <h1 class="text-danger"> SOFWARE ENGINEER </h1>
                </marquee>
            </div>

        </div>
    </section>
@endsection
