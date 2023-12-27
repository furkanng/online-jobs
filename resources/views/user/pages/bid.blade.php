@extends('user.layout.app')

@section('title', 'Tekliflerim')
@section('content')

    <!-- Tekliflerim Start -->
    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Tekliflerim</h2>
            </div>
            <div class="container mt-4 bg-white">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Proje Adı</th>
                            <th>Proje Süresi</th>
                            <th>İlgili Kategoriler</th>
                            <th>Teklif Tarihi</th>
                            <th>Teklif Güncelleme Tarihi</th>
                            <th>Durum</th>
                            <th>Teklif Fiyatı</th>
                            <th>Detay</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Proje Adı 1</td>
                            <td>14 Gün</td>
                            <td>Web Development, Laravel, Frontend</td>
                            <td>2023-01-01</td>
                            <td>2023-01-03</td>
                            <td class="text-danger">Reddedildi</td>
                            <td>$500</td>
                        </tr>
                        <tr>
                            <td>Proje Adı 2</td>
                            <td>30 Gün</td>
                            <td>Mobile App, UI/UX Design</td>
                            <td>2023-01-02</td>
                            <td>2023-01-04</td>
                            <td class="text-success">Kabul Edildi</td>
                            <td>$700</td>
                            <td><button class="btn btn-info" onclick="showDetails('Proje Adı 2')">Detay</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Tekliflerim End -->

    <script>
        function showDetails(projectName) {
            alert('Detaylar için: ' + projectName);
        }
    </script>

@endsection
