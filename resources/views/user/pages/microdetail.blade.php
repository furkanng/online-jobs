@extends('user.layout.app')

@section('title', 'İlan Detayı')
@section('content')
    <div class="container-fluid pt-4 ">
        <div class="bg-light text-left rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">İlan Detayı</h6>
                <h6>Teklifler: <span>{{$count}}</span></h6>
            </div>

            <div class="row">
                <div class="col-md mb-4 order-md-2 bg-white text-left rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="text-left">
                            <div class="d-flex flex-row justify-content-between">
                                <h5 class="card-title">Proje Adı: {{$advert["subject"]}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted p-2">
                                    Bütçe: {{$advert["price"]}}</h6>
                            </div>
                            <p class="card-text">
                                {{$advert["content"]}}
                            </p>
                            <p class="card-text">
                                Bu becerilere sahipseniz ve projeye katılmak istiyorsanız, lütfen başvurunuzu
                                gönderin.
                            </p>

                            <h6>Teknoloji Alanı : {{$advert["section"]}}</h6>

                            <small class="text-muted">Yayınlanma Tarihi: {{$advert["created_at"]}}</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Teklif Kısmı -->
        <div class="bg-light text-left rounded p-4 mt-4">
            <h6 class="mb-3">Teklif Verme</h6>
            <form method="POST" action="{{route("user.microPost",["advert" => $advert["advert_no"]])}}">
                @csrf
                <div class="form-group mb-2">
                    <label for="bidAmount">Teklif Değeri</label>
                    <input type="text" class="form-control" id="bidAmount" name="price" placeholder="₺">
                </div>
                <div class="form-group mb-2">
                    <label for="deliveryTime">Projenin Teslim Edilmesi Planlanan Gün Sayısı</label>
                    <input type="text" class="form-control" id="deliveryTime" name="day" placeholder="Gün">
                </div>
                <div class="form-group  mb-3">
                    <label for="proposal">Describe your proposal (minimum 100 characters)</label>
                    <textarea class="form-control" id="proposal" name="content" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Teklif Ver</button>
            </form>
        </div>
    </div>

@endsection


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var bidAmountInput = document.getElementById('bidAmount');
        var deliveryTimeInput = document.getElementById('deliveryTime');

        bidAmountInput.addEventListener('input', function () {
            // Remove non-numeric characters
            bidAmountInput.value = bidAmountInput.value.replace(/\D/g, '');
        });

        deliveryTimeInput.addEventListener('input', function () {
            // Remove non-numeric characters
            deliveryTimeInput.value = deliveryTimeInput.value.replace(/\D/g, '');
        });
    });
</script>
