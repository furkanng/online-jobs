@extends('user.layout.app')

@section('title', 'İlanlar')
@section('content')

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">İlanlar</h6>
                <a href="">Show All</a>
            </div>


            @foreach($adverts as $advert)
                <div class="col-md mb-4 order-md-2">
                    <div class="card-link">
                        <div class="card p-3 position-relative">
                            <div class="position-absolute top-0 end-0 mt-2 me-2">
                                <button class="btn btn-outline-dark"
                                        onclick="window.location='{{ route("user.jobdetail",["id" => $advert["id"]]) }}';">
                                    Teklif Ver
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon mr-3 rounded-circle bg-primary p-2">
                                    <i class="fas fa-newspaper fa-2x text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h5 class="card-title">{{  $advert["name"]   }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted p-2">{{  $advert["price"]   }} tl</h6>
                                    <p class="card-text">
                                        {{  $advert["content"]   }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-3 text-info">
                                        <div>
                                            <small class="text-muted">{{  $advert["created_at"]   }}</small>
                                            <span class="p-2"></span>
                                            <span class="ml-2">
                                                    <i class="far fa-bookmark"></i>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- İsteğe bağlı olarak başka kartlar ekleyebilirsiniz -->
                </div>

            @endforeach

        </div>
    </div>
    <!-- Recent Sales End -->

@endsection
