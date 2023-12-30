@extends('panel.layout.app')

@section('title', 'İlan Sil')
@section('content')

<div class="container mt-4">
    <div class="card bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="mb-0">İlan Düzenleme</h2>
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
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>İlan Başlığı 1</td>
                        <td>Açıklama 1</td>
                        <td>$500</td>
                        <td>2023-01-01</td>
                        <td>
                            <a href="#" class="btn btn-warning">Düzenle</a>
                        </td>
                        <td>
                            <form >
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
                            <a href="#" class="btn btn-warning">Düzenle</a>
                        </td>
                        <td>
                            <form >
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
    </div>
</div>
@endsection
