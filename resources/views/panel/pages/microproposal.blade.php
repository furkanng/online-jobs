@extends('panel.layout.app')

@section('title', 'Teklifler')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Mikro İş Teklifler</h2>
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
                            <td>Mikro İş 1</td>
                            <td>Youtube Abonelik</td>
                            <td>Fatih Sayar</td>
                            <td>$200</td>
                            <td>1 gün</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Onayla</a>
                            </td>
                        </tr>
                        <!-- Example Micro Job 2 -->
                        <tr>
                            <td>Mikro İş 2</td>
                            <td>Sosyal Medya Gönderi Tasarımı</td>
                            <td>Ayşe Demir</td>
                            <td>$50</td>
                            <td>2 gün</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Onayla</a>
                            </td>
                        </tr>
                        <!-- Example Micro Job 3 -->
                        <tr>
                            <td>Mikro İş 3</td>
                            <td>Logo Tasarımı</td>
                            <td>Mert Yılmaz</td>
                            <td>$100</td>
                            <td>3 gün</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Onayla</a>
                            </td>
                        </tr>
                        <!-- Example Micro Job 4 -->
                        <tr>
                            <td>Mikro İş 4</td>
                            <td>İngilizce Çeviri</td>
                            <td>Zeynep Kaya</td>
                            <td>$30</td>
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
