@extends('panel.layout.app')

@section('title', 'Teklifler')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">İlan Teklifleri</h2>
            </div>
            <div class="card bg-white rounded p-4 border-0">
                <div class="mt-4">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">İlan Bilgisi</th>
                            <th scope="col">Teklif Veren</th>
                            <th scope="col">Teklif Değeri</th>
                            <th scope="col">Teslim Gün Sayısı</th>
                            <th scope="col">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>İlan</td>
                            <td>Kurye Web Sitesi</td>
                            <td>Seda MALKOÇ</td>
                            <td>$1,800</td>
                            <td>8 gün</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Onayla</a>
                            </td>
                        </tr>
                        <!-- Example Offer 1 -->
                        <tr>
                            <td>İlan 2</td>
                            <td>Another Company</td>
                            <td>John Doe</td>
                            <td>$2,500</td>
                            <td>10 gün</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Onayla</a>
                            </td>
                        </tr>
                        <!-- Example Offer 2 -->
                        <tr>
                            <td>İlan 3</td>
                            <td>Web Design Project</td>
                            <td>Alice Johnson</td>
                            <td>$1,200</td>
                            <td>7 gün</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Onayla</a>
                            </td>
                        </tr>
                        <!-- Example Offer 3 -->
                        <tr>
                            <td>İlan 4</td>
                            <td>Software Development</td>
                            <td>Bob Smith</td>
                            <td>$3,000</td>
                            <td>15 gün</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Onayla</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
