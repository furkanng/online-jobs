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
                        <form method="POST"
                              action="{{route("panel.ilanlar.store")}}">
                            @csrf

                            <div class="mb-3">
                                <label for="subject" class="form-label">İlan Başlığı</label>
                                <input type="text" class="form-control"
                                       id="subject" name="subject"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">İlan Açıklaması</label>
                                <textarea class="form-control" id="content" name="content"
                                          rows="4" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Fiyat</label>
                                <input type="text" class="form-control"
                                       id="price" name="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="son_basvuru_tarihi" class="form-label">Son Başvuru
                                    Tarihi</label>
                                <input type="date" class="form-control" id="son_basvuru_tarihi"
                                       name="closed_date" required>
                            </div>

                            <div class="mb-3">
                                <label for="softwareOptions" class="form-label">Yazılım Seçenekleri</label>
                                <select id="softwareOptions" class="form-select" name="section">
                                    <option value="Web Programlama">Web Programlama</option>
                                    <option value="Mobil Programlama">Mobil Programlama</option>
                                    <option value="Masaüstü Programlama">Masaüstü Programlama</option>
                                    <option value="Yapay Zeka">Yapay Zeka</option>
                                    <option value="Veritabanı">Veritabanı</option>
                                    <option value="Frontend Programlama">Frontend Programlama</option>
                                    <option value="Backend Programlama">Backend Programlama</option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Numeric input için event listener
        var priceInput = document.getElementById('price');

        priceInput.addEventListener('input', function () {
            // Remove non-numeric characters
            priceInput.value = priceInput.value.replace(/\D/g, '');
        });

        priceInput.addEventListener('keypress', function (event) {
            // Allow only numeric characters and some special keys (e.g., backspace, delete)
            var allowedChars = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'Backspace', 'Delete'];
            if (!allowedChars.includes(event.key)) {
                event.preventDefault();
            }
        });

        // Tarih input için event listener
        var sonBasvuruTarihiInput = document.getElementById('son_basvuru_tarihi');

        // Get today's date in the format "YYYY-MM-DD"
        var today = new Date().toISOString().split('T')[0];

        sonBasvuruTarihiInput.addEventListener('input', function () {
            // Check if the selected date is before today
            if (sonBasvuruTarihiInput.value < today) {
                alert('Geçerli bir tarih seçiniz.');
                sonBasvuruTarihiInput.value = today;
            }
        });

        // Seçilen öğeleri güncelleyen fonksiyon
        function updateSelectedOption() {
            var selectedOptions = [];
            var selectElement = document.getElementById("softwareOptions");

            for (var i = 0; i < selectElement.options.length; i++) {
                if (selectElement.options[i].selected) {
                    selectedOptions.push(selectElement.options[i].value);
                }
            }

            var selectedOptionDiv = document.getElementById("selectedOption");
            selectedOptionDiv.innerHTML = "Seçilen Öğeler: " + selectedOptions.join(", ");
        }

        // Diğer event listener'lar ve fonksiyonlar buraya eklenir
    });
</script>


