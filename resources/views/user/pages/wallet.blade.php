@extends('user.layout.app')

@section('title', 'Profil Sayfası')
@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">E-Cüzdan</h6>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#walletMenu" aria-controls="walletMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="walletMenu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" onclick="showBalance(event)">Bakiye</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showReceiveMoneyForm(event)">Para Alma</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="sendMoney(event)">Para Gönderme</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showTransactionHistory(event)">İşlem Geçmişi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showCardInfo(event)">Kart Bilgilerim</a>
                        </li>

                    </ul>
                </div>
            </nav>

            <!-- Bakiye Gösterme -->
            <div class="row mb-4 wallet-section" id="balanceSection" style="display: none;">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bakiye</h5>
                            <p class="card-text" id="balance">$500.00</p>
                            <button class="btn btn-primary" onclick="updateBalance()">Bakiye Güncelle</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Para Alma Formu -->
            <div class="row mb-4 wallet-section" id="receiveMoneyForm" style="display: none;">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Para Alma</h5>
                            <form id="receiveMoneyForm" onsubmit="receiveMoney(event)">
                                <div class="form-group">
                                    <label for="sender">Gönderen:</label>
                                    <input type="text" class="form-control" id="sender" placeholder="Gönderen kullanıcı adı" required>
                                </div>
                                <div class="form-group">
                                    <label for="receivedAmount">Miktar:</label>
                                    <input type="number" class="form-control" id="receivedAmount" placeholder="Alınan miktar" required>
                                </div>
                                <button type="submit" class="btn btn-info m-2">Al</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Para Gönderme Formu -->
            <div class="row mb-4 wallet-section" id="sendMoneyForm" style="display: none;">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Para Gönderme</h5>
                            <form id="sendMoneyForm" onsubmit="paraGonder(event)">
                                <div class="form-group">
                                    <label for="alici">Alıcı:</label>
                                    <input type="text" class="form-control" id="alici" placeholder="Alıcı kullanıcı adı" required>
                                </div>
                                <div class="form-group">
                                    <label for="gonderilenMiktar">Miktar:</label>
                                    <input type="number" class="form-control" id="gonderilenMiktar" placeholder="Gönderilen miktar" required>
                                </div>
                                <button type="submit" class="btn btn-info m-2">Gönder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- İşlem Geçmişi -->
            <div class="row mb-4 wallet-section" id="transactionHistory" style="display: none;">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">İşlem Geçmişi</h5>
                            <ul id="transactionHistoryList" class="list-group">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Kart Bilgileri Formu -->
            <div class="row mb-4 wallet-section" id="card-info-form" style="display: none;">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kart Bilgileri</h5>
                            <form id="cardForm" onsubmit="showCardInfo(event)">
                                <div class="mb-3">
                                    <label for="cardNumber" class="form-label">Kart Numarası:</label>
                                    <input type="text" class="form-control" id="cardNumber" placeholder="Kart numarası" required>
                                </div>
                                <div class="mb-3">
                                    <label for="expirationDate" class="form-label">Son Kullanma Tarihi:</label>
                                    <input type="text" class="form-control" id="expirationDate" placeholder="MM/YYYY" required>
                                </div>
                                <button type="submit" class="btn btn-info">Kaydet</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <script src="../user/js/money.js"></script>
@endsection
