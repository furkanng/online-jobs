@extends('panel.layout.app')

@section('title', 'İlanlarım')
@section('content')

    <div class="container mt-4">
        <div class="card bg-gradient text-center rounded p-4">
            <div class="card">
                <h5 class="card-header">İlanlarım</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Konu</th>
                            <th>Başlık</th>
                            <th>Bitiş Tarihi</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($adverts as $advert)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{$advert["content"]}}</strong>
                                </td>
                                <td>{{$advert["subject"]}}</td>
                                <td>{{$advert["closed_date"]}}</td>
                                <td>
                                    @if($advert["status"] == 0)
                                        <span class="badge bg-label-danger me-1">Atanmadı</span>
                                    @else
                                        @if($advert["teslim"] == 0)
                                            <span class="badge bg-label-primary me-1">Atandı</span>
                                        @else
                                            <span class="badge bg-label-success me-1">Teslim Edildi</span>
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                               href="{{route("panel.ilanlar.edit", ['id' => $advert->id])}}"
                                            ><i class="bx bx-edit-alt me-1"></i>Düzenle</a
                                            >
                                            <a class="dropdown-item"
                                               href="{{route("panel.ilanlar.destroy", ['id' => $advert->id])}}"
                                            ><i class="bx bx-trash me-1"></i>Sil</a
                                            >
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
