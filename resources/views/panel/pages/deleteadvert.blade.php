@extends('panel.layout.app')

@section('title', 'İlan Sil')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">İlan Silme</h2>
            </div>

            <div class="container mt-4 bg-white">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>İlan Başlığı</th>
                            <th>Açıklama</th>
                            <th>Fiyat</th>
                            <th>Tarih</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>İlan Başlığı 1</td>
                            <td>Açıklama 1</td>
                            <td>$500</td>
                            <td>2023-01-01</td>
                            <td>
                                <form>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Sil</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>İlan Başlığı 2</td>
                            <td>Açıklama 2</td>
                            <td>$700</td>
                            <td>2023-01-02</td>
                            <td>
                                <form>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Sil</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Diğer ilanlar buraya eklenebilir -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-body">
                <form method="post">
                    @csrf
                    <p class="text-danger">İlanı silmek istediğinizden emin misiniz?</p>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger">Evet, Sil</button>
                        <a href="#" class="btn btn-secondary">İptal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
