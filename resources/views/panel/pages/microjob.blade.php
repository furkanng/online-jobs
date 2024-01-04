@extends('panel.layout.app')

@section('title', 'Mikro İş İlanları')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Mikro İş İlanları</h2>
            </div>
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

                    @foreach($microjobs as $microjob)

                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{$microjob["subject"]}}</strong>
                            </td>
                            <td>{{$microjob["subject"]}}</td>
                            <td>{{$microjob["closed_date"]}}</td>
                            <td>
                                @if($microjob["status"] == 0)
                                    <span class="badge bg-label-danger me-1">Atanmadı</span>
                                @else
                                    @if($microjob["teslim"] == 0)
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
                                           href="{{route("panel.mikro-is.edit", ['id' => $microjob->id])}}"
                                        ><i class="bx bx-edit-alt me-1"></i>Düzenle</a
                                        >
                                        <a class="dropdown-item"
                                           href="{{route("panel.mikro-is.destroy", ['id' => $microjob->id])}}"
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

@endsection
