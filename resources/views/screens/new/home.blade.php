@extends('layouts.user')
    @section('content')
    <div class="home-page">
        <section class="home-banner bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="banner-content">
                            <h1>Fast Cash for Slow <span>Car!</span></h1>
                            <p>With thousands of vehicles to choose from, you can find the one</p>
                            <button>Request A Quote</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="new-service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="new-service-title d-flex text-center">
                            <img src="{{ asset('/assets/images/check.png') }}" alt="">
                            <h6>ur Special Offers</h6>
                        </div>
                    </div>
                    <div class="service-cards">
                        <div class="col-lg-4">
                            <div class="service-card">
                                <div class="card" style="width: 100%;">
                                    <img src="{{ asset('/assets/images/service-card-img.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="card-info d-flex">
                                            <div class="card-title">
                                                <h4>Ford Kuga</h4>
                                                <p>Personal Price per month from Incl VAT</p>
                                                <span>$ 293.99</span>
                                            </div>
                                            <div class="card-sec-img">
                                                <img src="{{ asset('/assets/images/check.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="card-name">
                                            <p>2.5 EcoBoost PHEV ST-Line 5dr CVT</p>
                                        </div>
                                    </div>
                                  </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
