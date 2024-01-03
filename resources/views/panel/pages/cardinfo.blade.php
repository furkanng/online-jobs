@extends('panel.layout.app')

@section('title', 'Kart Bilgisi')
@section('content')

    <div class="container mt-4">
        <!-- Card for entering new card information -->
        <div id="newCardSection" class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Kart Bilgisi</h2>
            </div>
            <div class="container mt-1">
                <div class="d-flex flex-row justify-content-center">
                    <h3>Bakiye : </h3>
                    <button class="btn btn-outline-success mb-2 mx-2">{{auth()->guard("admin")->user()->account}} TL</button>
                </div>

                <div class="card mx-auto border-0" style="max-width: 500px; padding: 20px;">
                    <form action="{{route("panel.paraYukle")}}" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="isimSoyisim">İsim Soyisim</label>
                            <input type="text" class="form-control" id="isimSoyisim">
                        </div>
                        <div class="form-group mt-3">
                            <label for="kartNo">Kredi Kartı Numarası</label>
                            <input type="text" class="form-control" id="kartNo">
                        </div>
                        <div class="form-group mt-3">
                            <label for="sonKullanimTarihi">Son Kullanma Tarihi</label>
                            <input type="text" class="form-control" id="sonKullanimTarihi"
                            >
                        </div>
                        <div class="form-group mt-3">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control" id="cvc">
                        </div>
                        <div class="form-group mt-3">
                            <label for="sonKullanimTarihi">Ücret</label>
                            <input type="text" class="form-control" id="sonKullanimTarihi" name="price"
                            >
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Ödeme Yap
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card for displaying entered card information -->
        <div id="savedCardSection" class="card mt-4 mx-auto border-0"
             style="max-width: 500px; padding: 20px; display: none;">
            <div class="card-header">
                Kaydedilen Kart Bilgileri
            </div>
            <div class="card-body" id="cardInfoBody">
            </div>
            <button type="button" class="btn btn-primary btn-block mt-4" onclick="showNewCard()">Yeni Kart Bilgisi
                Girişi
            </button>
        </div>
    </div>

@endsection

<script>
    function submitForm() {
        var form = document.getElementById('kartForm');
        var cardData = {
            isimSoyisim: document.getElementById('isimSoyisim').value,
            kartNo: document.getElementById('kartNo').value,
            sonKullanimTarihi: document.getElementById('sonKullanimTarihi').value,
            cvc: document.getElementById('cvc').value,
        };

        displaySavedCardInfo(cardData);

        // form.submit();
        form.reset();
        alert('Bilgileriniz başarıyla kaydedildi!'); // Alert mesajını göster

        document.getElementById('newCardSection').style.display = 'none';
        document.getElementById('savedCardSection').style.display = 'block';
    }

    function displaySavedCardInfo(cardData) {
        var cardInfoBody = document.getElementById('cardInfoBody');

        cardInfoBody.innerHTML = '';

        var isimSoyisim = document.createElement('p');
        isimSoyisim.textContent = 'İsim Soyisim: ' + cardData.isimSoyisim;

        var kartNo = document.createElement('p');
        kartNo.textContent = 'Kredi Kartı Numarası: **** **** **** ' + cardData.kartNo.slice(-4);

        var sonKullanimTarihi = document.createElement('p');
        sonKullanimTarihi.textContent = 'Son Kullanma Tarihi: ' + cardData.sonKullanimTarihi;

        var cvc = document.createElement('p');
        cvc.textContent = 'CVC: ' + cardData.cvc;

        cardInfoBody.appendChild(isimSoyisim);
        cardInfoBody.appendChild(kartNo);
        cardInfoBody.appendChild(sonKullanimTarihi);
        cardInfoBody.appendChild(cvc);
    }

    function showNewCard() {
        document.getElementById('newCardSection').style.display = 'block';
        document.getElementById('savedCardSection').style.display = 'none';
        document.getElementById('kartForm').reset();
    }
</script>
