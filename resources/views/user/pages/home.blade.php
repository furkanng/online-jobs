@extends('user.layout.app')

@section('title', 'Home Page')
@section('content')




    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">İlanlar</h6>
                <a href="">Show All</a>
            </div>
            <div class="row">
                <div class="col-md mb-4 order-md-2">
                    <div class="card-link">
                        <div class="card p-3 position-relative">
                            <div class="position-absolute top-0 end-0 mt-2 me-2">
                                <button class="btn btn-outline-dark" onclick="window.location='{{ route("user.jobdetail") }}';">Teklif Ver</button>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon mr-3 rounded-circle bg-primary p-2">
                                    <i class="fas fa-newspaper fa-2x text-white"></i>
                                </div>
                                <div class="text-left">
                                    <h5 class="card-title">Courier Service website</h5>
                                    <h6 class="card-subtitle mb-2 text-muted p-2">$250.00 – 750.00 AUD</h6>
                                    <p class="card-text">
                                        I am looking for a skilled web developer to create a courier service website that focuses on facilitating online booking and payment. The main purpose of this website is to provide customers with a convenient platform to book and pay for courier services.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-3 text-info">
                                        <div class="d-flex">
                                <span class="mr-2 ">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                            <span class="p-2"></span>
                                            <span class="ml-2">
                                    <i class="fas fa-comment"></i>
                                    <span class="ml-1">25</span>
                                </span>
                                        </div>
                                        <div>
                                            <small class="text-muted">5 dakika önce</small>
                                            <span class="p-2"></span>
                                            <span class="ml-2">
                                    <i class="far fa-bookmark"></i>
                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- İsteğe bağlı olarak başka kartlar ekleyebilirsiniz -->
            </div>



            <div class="row">
                <div class="col-md mb-4 order-md-2">
                    <div class="card-link">
                        <div class="card p-3 position-relative">
                            <div class="position-absolute top-0 end-0 mt-2 me-2">
                                <button class="btn btn-outline-dark" onclick="window.location='{{ route("user.jobdetail") }}';">Teklif Ver</button>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon mr-3 rounded-circle bg-primary p-2">
                                    <i class="fas fa-newspaper fa-2x text-white"></i>
                                </div>
                                <div class="text-left">
                                    <h5 class="card-title">Courier Service website</h5>
                                    <h6 class="card-subtitle mb-2 text-muted p-2">$250.00 – 750.00 AUD</h6>
                                    <p class="card-text">
                                        I am looking for a skilled web developer to create a courier service website that focuses on facilitating online booking and payment. The main purpose of this website is to provide customers with a convenient platform to book and pay for courier services.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-3 text-info">
                                        <div class="d-flex">
                                <span class="mr-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                            <span class="p-2"></span>
                                            <span class="ml-2">
                                    <i class="fas fa-comment"></i>
                                    <span class="ml-1">25</span>
                                </span>
                                        </div>
                                        <div>
                                            <small class="text-muted">5 dakika önce</small>
                                            <span class="p-2"></span>
                                            <span class="ml-2">
                                    <i class="far fa-bookmark"></i>
                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- İsteğe bağlı olarak başka kartlar ekleyebilirsiniz -->
            </div>





        </div>
    </div>
    <!-- Recent Sales End -->


    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0">Messages</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt=""
                             style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt=""
                             style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt=""
                             style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt=""
                             style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->

@endsection
