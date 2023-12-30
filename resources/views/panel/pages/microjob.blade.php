@extends('panel.layout.app')

@section('title', 'Mikro İş İlanları')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Mikro İş İlanları</h2>
            </div>
            <div class="container mt-4 bg-white">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Mikro İş İlan</th>
                        <th scope="col">Açıklama</th>
                        <th scope="col">Ücret</th>
                        <th scope="col">Son Başvuru Tarihi</th>
                        <th scope="col">Teklifler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>İnstagram Takipçi Satış Temsilcisi</td>
                        <td>Şirket ABC, Instagram takipçi satış temsilcisi arıyor. Sosyal medya pazarlaması konusunda deneyimli adaylar tercih edilir.</td>
                        <td>Performansa Bağlı</td>
                        <td>2023-01-01</td>
                        <td>
                            <a href="{{route("panel.proposal")}}" class="btn btn-primary btn-sm">Teklifler</a>
                        </td>
                    </tr>
                    <tr>
                        <td>YouTube Kanalına Yorum Yap</td>
                        <td>Firma XYZ, YouTube kanalına yorum yapacak kişiler arıyor. Videoları düzenli olarak takip edenler tercih edilir.</td>
                        <td>$1 - $5 / Yorum</td>
                        <td>2023-01-02</td>
                        <td>
                            <a href="{{route("panel.proposal")}}" class="btn btn-primary btn-sm">Teklifler</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
