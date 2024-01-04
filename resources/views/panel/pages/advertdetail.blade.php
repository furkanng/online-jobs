@extends('panel.layout.app')

@section('title', 'İlan Detayı')
@section('content')
    <div class="container mt-4">
        <div class="card bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">İlan Detayları</h2>
            </div>
            <div class="container mt-4 bg-white">
                <div class="row g-4">
                    <div class="order-md-2 bg-white rounded p-4">
                        <div class="container mt-4">
                            <div class="card border-0">
                                <div class="card-body">
                                    <form method="POST"
                                          action="{{route("panel.ilanlar.update",["id" => $advert->id])}}">
                                        @method("PUT")
                                        @csrf

                                        <div class="mb-3">
                                            <label for="subject" class="form-label">İlan Başlığı</label>
                                            <input type="text" class="form-control" value="{{$advert["subject"]}}"
                                                   id="subject" name="subject"
                                                   required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="content" class="form-label">İlan Açıklaması</label>
                                            <textarea class="form-control" id="content" name="content"
                                                      rows="4" required>{{$advert["content"]}}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="price" class="form-label">Fiyat</label>
                                            <input type="text" value="{{$advert["price"]}}" class="form-control"
                                                   id="price" name="price" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="son_basvuru_tarihi" class="form-label">Son Başvuru
                                                Tarihi</label>
                                            <input type="date" class="form-control" id="son_basvuru_tarihi"
                                                   value="{{ \Carbon\Carbon::parse($advert["closed_date"])->format('Y-m-d') }}"
                                                   name="closed_date" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="softwareOptions" class="form-label">Yazılım Seçenekleri</label>
                                            <select id="softwareOptions" class="form-select" name="section"
                                                    onchange="updateSelectedOption()">
                                                <option value="{{$advert["section"]}}"
                                                        selected>{{$advert["section"]}}</option>
                                                <option value="Web Programlama">Web Programlama</option>
                                                <option value="Mobil Programlama">Mobil Programlama</option>
                                                <option value="Masaüstü Programlama">Masaüstü Programlama</option>
                                                <option value="Yapay Zeka">Yapay Zeka</option>
                                                <option value="Veritabanı">Veritabanı</option>
                                                <option value="Frontend Programlama">Frontend Programlama</option>
                                                <option value="Backend Programlama">Backend Programlama</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div id="selectedOption"></div>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Kaydet</button>
                                        </div>
                                    </form>
                                </div>


                                <div class="d-flex flex-column">

                                    <img src="http://online-jobs.test/storage/image/{{$advert["image"]}}"
                                         style="width: 200px">

                                    <a href="{{route("user.odemeyap",["id" => $advert["id"]])}}">
                                        <button class="btn btn-success btn-sm">Ödeme Yap</button>


                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
