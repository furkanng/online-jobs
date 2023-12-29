@extends('panel.layout.app')

@section('title', 'İlanlarım')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">İlanlarım</h2>
            </div>
            <div class="container mt-4 bg-white">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-12 wow fadeInUp bg-light p-4" data-wow-delay="0.1s">
                            <div class="project-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a class="d-block h5 mb-2" href="{{route("panel.advertdetail")}}">E-ticaret Platformu Geliştirme</a>
                                </div>
                                <div class="p-3 pb-0">
                                    <h5 class="text-primary mb-3">$1,200 - $1,800</h5>
                                    <p>Online satış platformu için yazılım geliştirici arıyoruz. E-ticaret konusunda deneyimli adaylar başvuruda bulunabilirler.</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-shopping-cart text-primary me-2"></i>E-commerce Development</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 wow fadeInUp bg-white p-4" data-wow-delay="0.1s">
                            <div class="project-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a class="d-block h5 mb-2" href="{{route("panel.advertdetail")}}">Veritabanı Optimizasyonu</a>                                </div>
                                <div class="p-3 pb-0">
                                    <h5 class="text-primary mb-3">$1,500 - $2,500</h5>
                                    <p>Veritabanı performansını artırmak için deneyimli bir veritabanı uzmanı arıyoruz. Proje detaylarına göz atın ve başvuruda bulunun.</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-database text-primary me-2"></i>Database Optimization</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 wow fadeInUp bg-white p-4" data-wow-delay="0.1s">
                            <div class="project-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a class="d-block h5 mb-2" href="{{route("panel.advertdetail")}}">Mobil Uygulama Geliştirme</a>                                </div>
                                <div class="p-3 pb-0">
                                    <h5 class="text-primary mb-3">$800 - $1,200</h5>
                                    <p>Mobil uygulama projesi için deneyimli bir mobil uygulama geliştirici arıyoruz. İlgilenen adaylar bağlantıya tıklayarak başvuruda bulunabilirler.</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-mobile-alt text-primary me-2"></i>Mobile App Development</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInUp bg-light p-4" data-wow-delay="0.1s">
                            <div class="project-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a class="d-block h5 mb-2" href="{{route("panel.advertdetail")}}">Web Uygulaması Geliştirme</a>
                                </div>
                                <div class="p-3 pb-0">
                                    <h5 class="text-primary mb-3">$1,000 - $2,000</h5>
                                    <p>Web tabanlı bir uygulama geliştirmek için deneyimli bir yazılım geliştirici arıyoruz. Proje detaylarına göz atmak ve başvuruda bulunmak için bağlantıya tıklayın.</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-cogs text-primary me-2"></i>Frontend & Backend Development</small>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
