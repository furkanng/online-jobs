@extends('panel.layout.app')

@section('title', 'Teklifler')
@section('content')

    <div class="container mt-4">
        <div class="card bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">İlan Teklifleri</h2>
            </div>
            <div class="card bg-white rounded p-4 border-0">
                <div class="mt-4">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">İlan Numarası</th>
                            <th scope="col">Teklif Veren</th>
                            <th scope="col">Teklif Değeri</th>
                            <th scope="col">Teslim Gün Sayısı</th>
                            <th scope="col">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($bids as $bid)
                            @php $user = \App\Models\User::findOrFail($bid["user_id"]) @endphp
                            <tr>
                                <td>{{$bid["advert_no"]}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$bid["price"]}}</td>
                                <td>{{$bid["day"]}}</td>
                                <td>
                                    <a href="{{route("panel.advertjobOnay",["id" =>$bid->id ])}}"
                                       class="btn btn-primary btn-sm">Onayla</a>
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
