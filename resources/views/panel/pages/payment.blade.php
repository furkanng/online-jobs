@extends('panel.layout.app')

@section('title', 'Para Gönderme')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Para Gönderme</h2>
            </div>
            <div class="container mt-3 d-flex justify-content-between">
                <div class="container mt-3">
                    <div class="row">
                        <!-- Güncel Bakiye Kartı -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Güncel Bakiye</h5>
                                    <p class="card-text">Bakiyeniz: $500.00</p>
                                </div>
                            </div>
                        </div>
                        <!-- Para Transferi Kartı -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Para Transferi</h5>
                                    <form>
                                        <div class="form-group mt-2">
                                            <label for="alici-isim">Alıcı İsim Soyisim:</label>
                                            <input type="text" class="form-control" id="alici-isim" placeholder="Alıcı İsim Soyisim">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="alici-hesap">Alıcı Hesap:</label>
                                            <input type="text" class="form-control" id="alici-hesap" placeholder="Alıcı Hesap Numarası">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="transfer-miktar">Transfer Miktarı:</label>
                                            <input type="text" class="form-control" id="transfer-miktar" placeholder="Miktar ($)">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="gonderim-tarihi">Gönderim Tarihi:</label>
                                            <input type="text" class="form-control" id="gonderim-tarihi" value="{{ now() }}" readonly>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="aciklama">Açıklama:</label>
                                            <textarea class="form-control" id="aciklama" rows="3" placeholder="Açıklama"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-primary mt-2">Transfer Et</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
