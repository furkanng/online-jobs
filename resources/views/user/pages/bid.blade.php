@extends('user.layout.app')

@section('title', 'Tekliflerim')
@section('content')

    <!-- Tekliflerim Start -->
    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Tekliflerim</h2>
            </div>
            <div class="container mt-4 bg-white">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Teklif Türü</th>
                            <th>Proje Konusu</th>
                            <th>Proje Bitiş Tarihi</th>
                            <th>Teklif Edilen Fiyat</th>
                            <th>Durum</th>
                            <th>İlgili Kategoriler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bids as $bid)
                            <tr>
                                @if($bid["type"] == "micro")
                                    <td>Mikro iş</td>
                                @else
                                    <td>İlan</td>
                                @endif
                                @if($bid["type"] == "micro")
                                    <td>{{\App\Models\MicroJob::where("advert_no",$bid["advert_no"])->first()->subject}}</td>
                                @else
                                    <td>{{\App\Models\Advert::where("advert_no",$bid["advert_no"])->first()->subject}}</td>
                                @endif
                                @if($bid["type"] == "micro")
                                    <td>{{\App\Models\MicroJob::where("advert_no",$bid["advert_no"])->first()->closed_date}}</td>
                                @else
                                    <td>{{\App\Models\Advert::where("advert_no",$bid["advert_no"])->first()->closed_date}}</td>
                                @endif
                                <td>{{$bid["price"]}}</td>
                                <td>
                                    @if($bid["status"] == "1")
                                        <button class="btn btn-sm btn-success">Onaylandı</button>
                                    @else
                                        <button class="btn btn-sm btn-danger">Onaylanmadı</button>
                                    @endif
                                </td>
                                @if($bid["type"] == "micro")
                                    <td>{{\App\Models\MicroJob::where("advert_no",$bid["advert_no"])->first()->section}}</td>
                                @else
                                    <td>{{\App\Models\Advert::where("advert_no",$bid["advert_no"])->first()->section}}</td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Tekliflerim End -->

    <script>
        function showDetails(projectName) {
            alert('Detaylar için: ' + projectName);
        }
    </script>

@endsection
