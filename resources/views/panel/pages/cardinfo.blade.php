
@extends('panel.layout.app')

@section('title', 'Kart Bilgisi')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Kart Bilgisi</h2>
            </div>
            <div class="container mt-1">
                <div class="card mx-auto border-0" style="max-width: 500px; padding: 20px;">
                    <form action="/odeme-yap" method="post">
                        <div class="form-group mt-3">
                            <label for="isimSoyisim">İsim Soyisim</label>
                            <input type="text" class="form-control" id="isimSoyisim" name="isimSoyisim" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="kartNo">Kredi Kartı Numarası</label>
                            <input type="text" class="form-control" id="kartNo" name="kartNo" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="sonKullanimTarihi">Son Kullanma Tarihi</label>
                            <input type="text" class="form-control" id="sonKullanimTarihi" name="sonKullanimTarihi" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control" id="cvc" name="cvc" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4" onclick="submitForm()">Kartı Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    function submitForm() {
        var form = document.getElementById('kartForm');
        form.submit(); // Formu submit et
        alert('Bilgileriniz başarıyla kaydedildi!'); // Alert mesajını göster
    }
</script>
