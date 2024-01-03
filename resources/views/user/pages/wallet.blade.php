@extends('user.layout.app')

@section('title', 'Profil Sayfası')
@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">E-Cüzdan</h6>
            </div>

            <!-- Bakiye Gösterme -->
            <div class="row mb-4 wallet-section" id="balanceSection">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bakiye</h5>
                            <p class="card-text" id="balance">{{auth()->guard("user")->user()->account}} TL</p>
                            <a href="{{route("user.hesap",["id" => auth()->guard("user")->user()->id])}}">
                                <button class="btn btn-primary">Hesaba Aktar</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../user/js/money.js"></script>
@endsection
