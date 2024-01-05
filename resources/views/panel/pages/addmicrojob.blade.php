@extends('panel.layout.app')

@section('title', 'Mikro İş İlan Ekle')
@section('content')
    <div class="container mt-4">
        <div class="card bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Mikro İş İlan Ekle</h2>
            </div>

            <div class="container mt-4">
                <div class="card border-0">
                    <div class="card-body">
                        <form method="POST"
                              action="{{route("panel.mikro-is.store")}}">
                            @csrf

                            <div class="mb-3">
                                <label for="ilan_basligi" class="form-label">İlan Başlığı</label>
                                <input type="text" class="form-control" id="ilan_basligi" name="subject" required>
                            </div>

                            <div class="mb-3">
                                <label for="ilan_aciklamasi" class="form-label">İlan Açıklaması</label>
                                <textarea class="form-control" id="ilan_aciklamasi" name="content" rows="4"
                                          required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Fiyat</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>

                            <div class="mb-3">
                                <label for="son_basvuru_tarihi" class="form-label">Son Başvuru Tarihi</label>
                                <input type="date" class="form-control" id="son_basvuru_tarihi" name="closed_date"
                                       required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">İlanı Oluştur</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
