@extends('user.layout.app')

@section('title', 'Aktif İlanlarım')
@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Aktif İşlerim</h6>
            </div>

            @foreach($userJobs as $job)
                <div class="col-md mb-4 order-md-2">
                    <div class="card-link">
                        <div class="card p-3 position-relative">
                            <div class=" top-0 end-0 mt-2 me-2">
                                <div class="d-flex align-items-center">
                                    <div class="icon mr-3 rounded-circle bg-primary p-2">
                                        <i class="fas fa-newspaper fa-2x text-white"></i>
                                    </div>
                                    <div class="text-center">
                                        <h5 class="card-title">{{  \App\Models\Advert::where("advert_no",$job["advert_no"])->first()->subject   }}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted p-2">Fiyat : {{  $job["price"]   }}
                                            tl</h6>
                                        <p class="card-text">
                                            {{  \App\Models\Advert::where("advert_no",$job["advert_no"])->first()->content   }}
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center mt-3 text-info">
                                            <div>
                                                <small class="text-muted">{{  $job["created_at"]   }}</small>
                                                <span class="p-2"></span>
                                                <span class="ml-2">
                                                    <i class="far fa-bookmark"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 d-flex justify-content-center flex-row">
                                <form action="{{route("user.teslimAdvert",["id" => $job["id"] ])}}"
                                      enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div>
                                        <input class="form-control mb-2" type="file" name="image" id="formFile">
                                    </div>
                                    <button class="btn btn-outline-dark">
                                        Teslim Et
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
@endsection
