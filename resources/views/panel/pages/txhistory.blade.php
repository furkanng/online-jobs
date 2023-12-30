@extends('panel.layout.app')

@section('title', 'Cüzdan ve Ödemeler')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Geçmiş Ödemeler</h2>
            </div>
            <div class="container mt-3">
                <div class="card mx-auto border-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">İsim Soyisim</th>
                            <th scope="col">Ödeme Miktarı</th>
                            <th scope="col">Ödeme Tarihi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Ahmet Yılmaz</td>
                            <td>$100.00</td>
                            <td>2023-01-15</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mehmet Can</td>
                            <td>$150.00</td>
                            <td>2023-01-18</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
