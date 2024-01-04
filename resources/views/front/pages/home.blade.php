@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')


    <!-- Category Start -->
    <div class="container-fluid bg-light">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-lg ">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3"
                               href="{{route("front.login")}}">
                                <div class="rounded p-4">
                                    <div class="icon mb-3 ">
                                        <i class="fas fa-user fa-2x"></i>
                                    </div>
                                    <h6>İş Arıyorum</h6>
                                    <p>İş alan olarak, bir iş için arayış içerisindeyim</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="cat-item d-block bg-light text-center rounded p-3"
                               href="{{route("panel.login")}}">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <i class="fas fa-user-tie fa-2x"></i>
                                    </div>
                                    <h6>İş veriyorum</h6>
                                    <p>İşveren olarak, bir projenin yürütülmesi için çalışan arayışındayım.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->



@endsection
