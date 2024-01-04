@extends('user.layout.app')

@section('title', 'Mikro İşlerim')
@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Mikro İşlerim</h6>
            </div>

            @foreach($userJobs as $job)

                <div class="col-md mb-4 order-md-2">
                    <div class="card-link">
                        <div class="card p-3 position-relative">
                            <div class="position-absolute top-0 end-0 mt-2 me-2">
                                <a href="{{route("user.teslim",["id" => $job["id"] ])}}">
                                    <button class="btn btn-outline-dark">
                                        Teslim Et
                                    </button>
                                </a>

                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon mr-3 rounded-circle bg-primary p-2">
                                    <i class="fas fa-newspaper fa-2x text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h5 class="card-title">{{  \App\Models\MicroJob::where("advert_no",$job["advert_no"])->first()->subject   }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted p-2">Fiyat : {{  $job["price"]   }}
                                        tl</h6>
                                    <p class="card-text">
                                        {{  \App\Models\MicroJob::where("advert_no",$job["advert_no"])->first()->content   }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-3 text-info">
                                        <div>
                                            <span class="p-2">Teslim Tarihi:</span>
                                            <span class="ml-2">
                                                    {{  date('Y-m-d H:i:s', strtotime($job["created_at"] .'+'. $job["dead_line"].' days'))  }}
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

    <script src="{{ asset('../user/js/microtask.js') }}"></script>

@endsection
