@extends('user.layout.app')

@section('title', 'Mesajlarım')
@section('content')

    <!-- Recent Sales Start -->
    <div class="container-fluid mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Mesajlarım</h2>
            </div>
            <div class="container-fluid mt-4">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-12">
                        <div class="card bg-white rounded p-4">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <img class="rounded-circle flex-shrink-0" src="https://portal.bilardo.gov.tr/assets/pages/media/profile/profile_user.jpg" alt=""
                                     style="width: 40px; height: 40px;">
                                <div class="ms-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-0">Scott Mccall</h6>
                                        <small class="text-muted">15 minutes ago</small>
                                    </div>
                                    <span class="text-muted">Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="card bg-white rounded p-4">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <img class="rounded-circle flex-shrink-0" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA6zq21NVsOxQs4PL4rJU30aiCXEkVrwB-Y19RYowqhUGklgM3SNfj6e-L1UU3mfuyByM&usqp=CAU" alt=""
                                     style="width: 40px; height: 40px;">
                                <div class="ms-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-0">Stiles Stilinski</h6>
                                        <small class="text-muted">15 minutes ago</small>
                                    </div>
                                    <span class="text-muted">Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="card bg-white rounded p-4">
                            <div class="d-flex align-items-center border-bottom mb-3">
                                <img class="rounded-circle flex-shrink-0" src="https://lenstax.com/auth/app-assets/images/profile/user-uploads/user-09.jpg" alt=""
                                     style="width: 40px; height: 40px;">
                                <div class="ms-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-0">Allison Argent</h6>
                                        <small class="text-muted">15 minutes ago</small>
                                    </div>
                                    <span class="text-muted">Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="card bg-white rounded p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img class="rounded-circle flex-shrink-0" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTRU0QuAFkZGD-RSDpDmkFPheiWD6UEP0EZZiWRLvrbaX4eAl72z3xSxjq93TjhXGtjx0&usqp=CAU" alt=""
                                     style="width: 40px; height: 40px;">
                                <div class="ms-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-0">Lydia Martin</h6>
                                        <small class="text-muted">15 minutes ago</small>
                                    </div>
                                    <span class="text-muted mb-3">Merhaba size attığımız işe bakmak ister misiniz?</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection
