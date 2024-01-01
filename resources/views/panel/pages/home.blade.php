@extends('panel.layout.app')

@section('title', 'Ana Sayfa')
@section('content')
    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Ana Sayfa</h2>
            </div>

            <div class="container p-4 mt-4 bg-white">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">İstatistikler</h5>
                                        <p class="card-text">Toplam İlan Sayısı: [İlan Sayısı]</p>
                                        <p class="card-text">Toplam Teklif Sayısı: [Teklif Sayısı]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Son Teklifler</h5>
                                        <ul class="list-group">
                                            <li class="list-group-item">Teklif Bilgisi 1</li>
                                            <li class="list-group-item">Teklif Bilgisi 2</li>
                                            <!-- Diğer başvurular buraya eklenebilir -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5>İşlemler</h5>
                            <a href="" class="btn btn-primary mr-2">Yeni İlan Oluştur</a>
                            <a href="" class="btn btn-secondary">Tüm İlanları Görüntüle</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
