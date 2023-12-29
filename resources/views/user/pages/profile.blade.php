@extends('user.layout.app')

@section('title', 'Profil Sayfası')
@section('content')

    <div class="container-fluid pt-4">
        <div class="bg-light text-left rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Profil</h6>
            </div>
            <div class="row">
                <div class="col-md mb-4 order-md-2">
                    <div class="card">
                        <div class="card-body bg-white rounded p-4">
                            <div class="container profile-container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-image" style="width: 200px">
                                            <img src="{{asset("user/img/no-image.jpg")}}" alt="Profil Fotoğrafı"
                                                 class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="profile-info">
                                            <h1>{{  auth()->guard("user")->user()->name   }}</h1>
                                            <p>mail: {{  auth()->guard("user")->user()->email   }}</p>
                                            <p>Telefon: {{  auth()->guard("user")->user()->phone   }}</p>
                                            <p>Ülke: {{  auth()->guard("user")->user()->city   }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-4 order-md-2">
                    <div class="card">
                        <div class="card-body bg-white rounded p-4">
                            <div class="container profile-container">
                                <h2>Eğitim</h2>
                                <p>Üniversite: Boğaziçi Üniversitesi</p>
                                <p>Bölüm: Bilgisayar Mühendisliği</p>
                                <p>Mezuniyet Yılı: 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-4 order-md-2">
                    <div class="card">
                        <div class="card-body bg-white rounded p-4">
                            <div class="container profile-container">
                                <h2>İş Deneyimi</h2>
                                <p>Şirket: Yazılım A.Ş.</p>
                                <p>Pozisyon: Yazılım Geliştirme Uzmanı</p>
                                <p>İşe Başlama Tarihi: Ocak 2023</p>
                                <p>İşten Çıkış Tarihi: Aralık 2025</p>
                                <p>Sorumluluklar ve Başarılar: Proje yönetimi, geliştirme süreçleri.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-4 order-md-2">
                    <div class="card">
                        <div class="card-body bg-white rounded p-4">
                            <div class="container profile-container">
                                <h2>Yetenekler</h2>
                                <p>Web Development, Graphic Design, Yazılım Geliştirme, Proje Yönetimi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-4 order-md-2">
                    <div class="card">
                        <div class="card-body bg-white rounded p-4">
                            <div class="container profile-container">
                                <h2>Portföy</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <img
                                                src="https://admin.bidy.com.tr/Uploads/blog/4c4340e1ac3b4e85bb3e3816df09977d.webp"
                                                alt="Proje 1" class="card-img-top h-75">
                                            <div class="card-body">
                                                <h5 class="card-title">Proje 1</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <img
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIlwLQXJTMB2s8eCddBBtgTX19n5_DiLxgrMhrC8-3AJ37J2-rfVMgs0lxDR26k-llKsM&usqp=CAU"
                                                alt="Proje 2" class="card-img-top h-75">
                                            <div class="card-body">
                                                <h5 class="card-title">Proje 2</h5>
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
    </div>

@endsection
