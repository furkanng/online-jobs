
@extends('panel.layout.app')

@section('title', 'Teklifler')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Teklifler</h2>
            </div>
            <div class="card bg-white rounded p-4 border-0">
                <div class="mt-4">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">İlan Tipi</th>
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
                        <tr>
                            <td>Mikro İş</td>
                            <td>Youtube Abonelik</td>
                            <td>Fatih Sayar</td>
                            <td>$200</td>
                            <td>1 gün</td>
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
