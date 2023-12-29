@extends('panel.layout.app')

@section('title', 'Yeni İlan Ekle')
@section('content')
    <div class="container mt-4">
        <div class="card bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">İlan Ekle</h2>
            </div>

            <div class="container mt-4">
                <div class="card border-0">
                    <div class="card-body">
                        <form>
                            @csrf

                            <div class="mb-3">
                                <label for="ilan_basligi" class="form-label">İlan Başlığı</label>
                                <input type="text" class="form-control" id="ilan_basligi" name="ilan_basligi" required>
                            </div>

                            <div class="mb-3">
                                <label for="ilan_aciklamasi" class="form-label">İlan Açıklaması</label>
                                <textarea class="form-control" id="ilan_aciklamasi" name="ilan_aciklamasi" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Fiyat</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>

                            <div class="mb-3">
                                <label for="son_basvuru_tarihi" class="form-label">Son Başvuru Tarihi</label>
                                <input type="date" class="form-control" id="son_basvuru_tarihi" name="son_basvuru_tarihi" required>
                            </div>

                            <div class="mb-3">
                                <label for="softwareOptions" class="form-label">Yazılım Seçenekleri</label>
                                <select id="softwareOptions" class="form-select" onchange="updateSelectedOption()">
                                    <option value="" disabled selected>Seçenekleri Seçin</option>
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
                                <button type="submit" class="btn btn-primary">İlanı Oluştur</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function updateSelectedOption() {
        // Seçilen öğeleri al
        var selectedOptions = [];
        var selectElement = document.getElementById("softwareOptions");
        for (var i = 0; i < selectElement.options.length; i++) {
            if (selectElement.options[i].selected) {
                selectedOptions.push(selectElement.options[i].value);
            }
        }

        // Seçilen öğeleri gösteren div'i güncelle
        var selectedOptionDiv = document.getElementById("selectedOption");
        selectedOptionDiv.innerHTML = "Seçilen Öğeler: " + selectedOptions.join(", ");
    }
</script>

